<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        return Subcategory::all();
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'name' => 'required',
                'slug' => 'required|unique:subcategories',
                'category_id' => 'required'
            ]);

            $subCategory = new Subcategory();

            $subCategory->name = $request->name;
            $subCategory->slug = $request->slug;
            $subCategory->category_id = $request->category_id;

            if($subCategory->save()) {
                return response()->json(['status' => 'success', 'message' => 'Subcategory Created Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        try{
            $subCategory = Subcategory::findOrFail($id);

            $this->validate($request, [
                'name' => 'required',
                'slug' => 'required|unique:subcategories',
                'category_id' => 'required'
            ]);

            $subCategory->name = $request->name;
            $subCategory->slug = $request->slug;
            $subCategory->category_id = $request->category_id;

            if($subCategory->save()) {
                return response()->json(['status' => 'success', 'message' => 'Subcategory Updated Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        try{
            $subcategory = Subcategory::findOrFail($id);

            if($subcategory->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Subcategory Deleted Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

}
