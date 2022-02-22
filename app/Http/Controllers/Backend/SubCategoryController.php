<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function SubCategoryView(){
        $subcategory = SubCategory::latest()->get();
        return view('backend.category.subcategory-view', compact('subcategory'));
    }
    public function SubCategoryAdd(){
        $categories = Category::orderby('category_name_en', 'ASC')->get();
        return view('backend.category.subcategory-add', compact('categories'));
    }
    public function SubCategoryStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_hin' => 'required',
            'subcategory_slug_en' => 'required',
            'subcategory_slug_hin' => 'required',
        ]);
        
        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_hin' => $request->subcategory_name_hin,
            'subcategory_slug_en' => strtolower(str_replace(' ', '_',$request->subcategory_name_en)),
            'subcategory_slug_hin' => str_replace(' ', '_',$request->subcategory_name_hin),
        ]);
        $notification = array(
            'message' => 'SubCategory Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function SubCategoryEdit($id){
        $categories = Category::orderby('category_name_en', 'ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('backend.category.subcategory-edit', compact('subcategory', 'categories'));
    }
    public function SubCategoryUpdate(Request $request){
        $subcat_id = $request->id;
        SubCategory::findOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_hin' => $request->subcategory_name_hin,
            'subcategory_slug_en' => strtolower(str_replace(' ', '_',$request->subcategory_name_en)),
            'subcategory_slug_hin' => str_replace(' ', '_',$request->subcategory_name_hin),
        ]);
        $notification = array(
            'message' => 'SubCategory Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.subcategory')->with($notification);
    }
    public function SubCategoryDelete($id){
        SubCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'SubCategory Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
