<?php

namespace App\Http\Controllers;

use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function index()
    {
        return ProductAttribute::all();
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'name' => 'required'
            ]);

            $attribute = new ProductAttribute();

            $attribute->name = $request->name;

            if($attribute->save()) {
                return response()->json(['status' => 'success', 'message' => 'Attribute Created Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{

            $this->validate($request, [
                'name' => 'required'
            ]);

            $attribute = ProductAttribute::findOrFail($id);

            $attribute->name = $request->name;

            if($attribute->save()) {
                return response()->json(['status' => 'success', 'message' => 'Attribute Updated Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        try{
            $attribute = ProductAttribute::findOrFail($id);

            if($attribute->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Attribute Deleted Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
