<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function CategoryView()
    {
        $categories = Category::latest()->get();
        return view('backend.category.category_view', compact('categories'));
    }

    public function CategoryStore(Request $request)
    {
        $request->validate([
            'category_name_ua' => 'required',
            'category_name_ru' => 'required',
            'category_icon' => 'required',

        ], [
            'category_name_ua.required' => 'Укажите украинское название',
            'category_name_ru.required' => 'Укажите русское название',
        ]);

        $image = $request->file('category_icon');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize('300', '300')->save('upload/category/' . $name_gen);
        $save_url = 'upload/category/' . $name_gen;

        Category::insert([
            'category_name_ua' => $request->category_name_ua,
            'category_name_ru' => $request->category_name_ru,
            'category_slug_ua' => (str_replace(' ', '_', $request->сategory_name_ua)),
            'category_slug_ru' => str_replace(' ', '_', $request->category_slug_ru),
            'category_icon' => $save_url,
        ]);


        return redirect()->back();
    }

    public function CategoryEdit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.category_edit', compact('category'));
    }

    public function CategoryUpdate(Request $request)
    {
        $category_id = $request->id;
        $old_img = $request->old_image;
        if ($request->file('category_icon')) {
            unlink($old_img);
            $image = $request->file('category_icon');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/category/' . $name_gen);
            $save_url = 'upload/category/' . $name_gen;

            Category::findOrFail($category_id)->update([
                'category_name_ua' => $request->category_name_ua,
                'category_name_ru' => $request->category_name_ru,
                'category_slug_ua' => strtolower(str_replace(' ', '_', $request->сategory_name_ua)),
                'category_slug_ru' => str_replace(' ', '_', $request->category_name_ru),
                'category_icon' => $save_url,

            ]);
            return redirect()->route('all.category');
        }else{
            Category::findOrFail($category_id)->update([
                'category_name_ua' => $request->category_name_ua,
                'category_name_ru' => $request->category_name_ru,
                'category_slug_ua' => str_replace(' ', '_', $request->ategory_name_ua),
                'category_slug_ru' => str_replace(' ', '_', $request->category_name_ru),
            ]);
            return redirect()->route('all.category');
        }


    }

    public function CategoryDelete($id){
        $category = Category::findOrFail($id);
        $img = $category->category_icon;
        unlink($img);
        Category::findOrFail($id)->delete();

        return redirect()->route('all.category');
    }
}




