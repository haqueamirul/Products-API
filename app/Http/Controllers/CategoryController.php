<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'category_name' => 'required',
                'category_slug' => 'required'
            ]);

            $category = new Category();

            $category->category_name = $request->category_name;
            $category->category_slug = $request->category_slug;

            if($category->save()) {
                return response()->json(['status' => 'success', 'message' => 'Category Created Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $category = Category::findOrFail($id);

            $this->validate($request, [
                'category_name' => 'required',
                'category_slug' => 'required'
            ]);

            $category->category_name = $request->category_name;
            $category->category_slug = $request->category_slug;

            if($category->save()) {
                return response()->json(['status' => 'success', 'message' => 'Category Updated Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        try{
            $category = Category::findOrFail($id);

            if($category->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Category Deleted Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
