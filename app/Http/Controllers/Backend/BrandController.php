<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function BrandView()
    {
        $brands = Brand::latest()->get();
        return view('backend.brand.brand_view', compact('brands'));
    }

    public function BrandStore(Request $request)
    {
        $request->validate([
            'brand_name_ua' => 'required',
            'brand_name_ru' => 'required',
            'brand_image' => 'required',

        ], [
            'brand_name_ua.required' => 'Укажите украинское название',
            'brand_name_ru.required' => 'Укажите русское название',
        ]);

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;

        Brand::insert([
            'brand_name_ua' => $request->brand_name_ua,
            'brand_name_ru' => $request->brand_name_ru,
            'brand_slug_ua' => str_replace(' ', '_', $request->brand_name_ua),
            'brand_slug_ru' => str_replace(' ', '_',$request->brand_name_ru),
            'brand_image' => $save_url,
        ]);



        return redirect()->back();
    }

    public function BrandEdit($id){
        $brands = Brand::findOrFail($id);
        return view('backend.brand.brand_edit', compact('brands'));

    }

    public function BrandUpdate(Request $request){
        $brand_id = $request->id;
        $old_img = $request->old_image;
        if ($request->file('brand_image')){
            unlink($old_img);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
            $save_url = 'upload/brand/'.$name_gen;


            Brand::findOrFail($brand_id)->update([
                'brand_name_ua' => $request->brand_name_ua,
                'brand_name_ru' => $request->brand_name_ru,
                'brand_slug_ua' => str_replace(' ', '_', $request->brand_name_ua),
                'brand_slug_ru' => str_replace(' ', '_',$request->brand_name_ru),
                'brand_image' => $save_url,

            ]);




            return redirect()->route('all.brand');
        }else{
            Brand::findOrFail($brand_id)->update([
                'brand_name_ua' => $request->brand_name_ua,
                'brand_name_ru' => $request->brand_name_ru,
                'brand_slug_ua' => str_replace(' ', '_', $request->brand_name_ua),
                'brand_slug_ru' => str_replace(' ', '_',$request->brand_name_ru),
            ]);
            return redirect()->route('all.brand');
        }
    }


    public function BrandDelete($id){
       $brands = Brand::findOrFail($id);
       $img = $brands->brand_image;
       unlink($img);
       Brand::findOrFail($id)->delete();

       return redirect()->back();
    }


}
