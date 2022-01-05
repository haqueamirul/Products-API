<?php

namespace App\Http\Controllers;

use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    public function index()
    {
        return AttributeValue::all();
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'value' => 'required',
                'product_attribute_id' => 'required',
                'product_id' => 'required'
            ]);

            $attrvalue = new AttributeValue();

            $attrvalue->value = $request->value;
            $attrvalue->product_attribute_id = $request->product_attribute_id;
            $attrvalue->product_id = $request->product_id;

            if($attrvalue->save()) {
                return response()->json(['status' => 'success', 'message' => 'Attribute Value Created Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        try{

            $this->validate($request, [
                'value' => 'required',
                'product_attribute_id' => 'required',
                'product_id' => 'required'
            ]);

            $attrvalue = AttributeValue::findOrFail($id);

            $attrvalue->value = $request->value;
            $attrvalue->product_attribute_id = $request->product_attribute_id;
            $attrvalue->product_id = $request->product_id;

            if($attrvalue->save()) {
                return response()->json(['status' => 'success', 'message' => 'Attribute Value Updated Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        try{
            $attrvalue = AttributeValue::findOrFail($id);

            if($attrvalue->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Attribute value Deleted Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
