<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // $products = Product::join('attribute_values','attribute_values.product_id', '=', 'products.id')
        //                 ->join('product_attributes', 'product_attributes.id', '=', 'attribute_values.product_attribute_id')
        //                 ->get();
        // return $products;
        // dd($products);
        return Product::all();
    }

    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'product_name' => 'required',
                'slug' => 'required|unique:products',
                'short_description' => 'required',
                'regular_price' => 'required',
                'SKU' => 'required',
                'stock_status' => 'required',
                'featured' => 'required',
                'quantity' => 'required',
                'category_id' => 'required',
            ]);

            $product = new Product();

            if($request->hasFile('image')){
                $file = $request->file('image');
                $allowedfileextension = ['pdf', 'png', 'jpg'];
                $extention = $file->getClientOriginalExtension();
                $check = in_array($extention, $allowedfileextension);

                if($check){
                    $name = time() . $file->getClientOriginalName();
                    $file->move('images', $name);
                    $product->image = $name;
                }
            }

            $product->product_name = $request->product_name;
            $product->slug = $request->slug;
            $product->short_description = $request->short_description;
            $product->description = $request->description;
            $product->regular_price = $request->regular_price;
            $product->sale_price = $request->sale_price;
            $product->SKU = $request->SKU;
            $product->stock_status = $request->stock_status;
            $product->featured = $request->featured;
            $product->quantity = $request->quantity;
            $product->category_id = $request->category_id;

            if($product->save()) {
                return response()->json(['status' => 'success', 'message' => 'Product Created Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            
            $this->validate($request, [
                'product_name' => 'required',
                'slug' => 'required|unique:products',
                'short_description' => 'required',
                'regular_price' => 'required',
                'SKU' => 'required',
                'stock_status' => 'required',
                'featured' => 'required',
                'quantity' => 'required',
                'category_id' => 'required',
            ]);

            $product = Product::findOrFail($id);

            if($request->hasFile('image')){
                $file = $request->file('image');
                $allowedfileextension = ['pdf', 'png', 'jpg'];
                $extention = $file->getClientOriginalExtension();
                $check = in_array($extention, $allowedfileextension);

                if($check){
                    $name = time() . $file->getClientOriginalName();
                    $file->move('images', $name);
                    $product->image = $name;
                }
            }

            $product->product_name = $request->product_name;
            $product->slug = $request->slug;
            $product->short_description = $request->short_description;
            $product->description = $request->description;
            $product->regular_price = $request->regular_price;
            $product->sale_price = $request->sale_price;
            $product->SKU = $request->SKU;
            $product->stock_status = $request->stock_status;
            $product->featured = $request->featured;
            $product->quantity = $request->quantity;
            $product->category_id = $request->category_id;

            if($product->save()) {
                return response()->json(['status' => 'success', 'message' => 'Product Updated Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        try{
            $post = Product::findOrFail($id);

            if($post->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Product Deleted Successfully!']);
            }

        }catch (\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
