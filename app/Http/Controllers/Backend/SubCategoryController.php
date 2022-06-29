<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\SubSubCategory;
use Intervention\Image\Facades\Image;

class SubCategoryController extends Controller
{
    public function SubCategoryView(){
        $category = Category::orderBy('category_name_ua', 'ASC')->get();
        $subcategory = Subcategory::latest()->get();
        return view('backend.category.subcategory_view', compact('subcategory', 'category'));
    }

    public function SubCategoryStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_ua' => 'required',
            'subcategory_name_ru' => 'required',


        ], [
            'category_id.required' => 'Выберете нужную категорию',
            'subcategory_name_ua.required' => 'Укажите украинское название',
            'subcategory_name_ru.required' => 'Укажите русское название',
        ]);

        Subcategory::insert([
            'category_id' =>$request->category_id ,
            'subcategory_name_ua' => $request->subcategory_name_ua,
            'subcategory_name_ru' => $request->subcategory_name_ru,
            'subcategory_slug_ua' => str_replace(' ', '_', $request->subcategory_slug_ua),
            'subcategory_slug_ru' => str_replace(' ', '_', $request->subcategory_slug_ru),
        ]);
        return redirect()->back();
    }

    public function SubCategoryEdit($id){
        $category = Category::orderBy('category_name_ua', 'ASC')->get();
        $subcategory = Subcategory::findOrFail($id);
        return view('backend.category.subcategory_edit', compact('subcategory', 'category'));
    }

    public function SubCategoryUpdate(Request $request)
    {
        $subcategory_id = $request->id;


        Subcategory::findOrFail($subcategory_id)->update([
            'category_id' =>$request->category_id ,
            'subcategory_name_ua' => $request->subcategory_name_ua,
            'subcategory_name_ru' => $request->subcategory_name_ru,
            'subcategory_slug_ua' => str_replace(' ', '_', $request->subcategory_slug_ua),
            'subcategory_slug_ru' => str_replace(' ', '_', $request->subcategory_slug_ru),
        ]);
        return redirect()->route('all.subcategory');



    }

    public function SubCategoryDelete($id){
        Subcategory::findOrFail($id)->delete();
        return redirect()->back();
    }

    //Sub Sub Category
    public function SubSubCategoryView(){
        $category = Category::orderBy('category_name_ua', 'ASC')->get();
        $subsubcategory = SubSubCategory::latest()->get();
        return view('backend.category.sub_subcategory_view', compact('subsubcategory', 'category'));
    }

    public function GetSubCategory($category_id){
        $subcat = Subcategory::where('category_id', $category_id)->orderBy('subcategory_name_ua', 'ASC')->get();
        return json_encode($subcat);
    }
    public function SubSubCategoryStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name_ua' => 'required',
            'subsubcategory_name_ru' => 'required',


        ], [
            'category_id.required' => 'Выберете нужную категорию',
            'subsubcategory_name_ua.required' => 'Укажите украинское название',
            'subsubcategory_name_ru.required' => 'Укажите русское название',
        ]);

        SubSubcategory::insert([
            'category_id' =>$request->category_id ,
            'subcategory_id' =>$request->subcategory_id ,
            'subsubcategory_name_ua' => $request->subsubcategory_name_ua,
            'subsubcategory_name_ru' => $request->subsubcategory_name_ru,
            'subsubcategory_slug_ua' => str_replace(' ', '_', $request->subsubcategory_slug_ua),
            'subsubcategory_slug_ru' => str_replace(' ', '_', $request->subsubcategory_slug_ru),
        ]);
        return redirect()->back();
    }
    public function SubSubCategoryEdit($id){
        $category = Category::orderBy('category_name_ua', 'ASC')->get();
        $subcategory = Subcategory::orderBy('subcategory_name_ua', 'ASC')->get();
        $subsubcategory = SubSubCategory::findOrFail($id);
        return view('backend.category.subsubcategory_edit', compact('category', 'subcategory', 'subsubcategory'));
    }

    public function SubSubCategoryUpdate(Request $request){
        $subsubcategory_id = $request->id;


        SubSubcategory::findOrFail($subsubcategory_id)->update([
            'category_id' =>$request->category_id ,
            'subcategory_id' =>$request->subcategory_id ,
            'subsubcategory_name_ua' => $request->subsubcategory_name_ua,
            'subsubcategory_name_ru' => $request->subsubcategory_name_ru,
            'subsubcategory_slug_ua' => str_replace(' ', '_', $request->subsubcategory_slug_ua),
            'subsubcategory_slug_ru' => str_replace(' ', '_', $request->subsubcategory_slug_ru),
        ]);
        return redirect()->route('all.subsubcategory');

    }

    public function SubSubCategoryDelete($id){
        SubSubCategory::findOrFail($id)->delete();
        return redirect()->back();
    }

}
