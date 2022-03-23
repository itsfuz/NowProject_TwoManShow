<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //

    public function goToHome(){

        $allProducts = Product::all();
        $allCategories = Categories::all();

        return view('home')
        ->with('allProducts', $allProducts)
        ->with('allCategories', $allCategories);

    }

    public function getProductbyCategory($id){

        $categoryName = Categories::where('id', $id)->category_name->get();
        $products = Product::where('category_id', $id) ->get();

        $product = [];

        $counter = 0;

        foreach($products as $aproduct){

            $product[$counter]['id'] = $aproduct->id;
            $product[$counter]['product_name'] = $aproduct->product_name;
            $product[$counter]['unique_id'] = $aproduct->product_unique_id;
            $product[$counter]['category_name'] = $categoryName;
            $product[$counter]['image'] = $aproduct->image;

            $counter++;

        }

        return view('product')
        ->with('products', $product)
        ->with('counter', $counter);
    }

    public function AddProduct(Request $request){


        $rules = [
            'product_name' => 'required',
            'product_unqiue_id' => 'required',
            'description' => 'required',
            'color' => 'required',
            'image' => 'required|mimes:jpg,png',
            'detail_1' => 'required|mimes:jpg,png',
            'detail_2' => 'required|mimes:jpg,png',
            'detail_3' => 'required|mimes:jpg,png',
            'detail_4' => 'required|mimes:jpg,png',
        ];

        // $validator = Validator::make($request->all(), $rules);

        // if($validator->fails()){
        //     return back()->withErrors($validator);
        // }

        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/product-image', $file, $imageName);

        $file = $request->file('detail_1');
        $imageName1 = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/product-image', $file, $imageName1);

        $file = $request->file('detail_2');
        $imageName2 = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/product-image', $file, $imageName2);

        $file = $request->file('detail_3');
        $imageName3 = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/product-image', $file, $imageName3);

        $file = $request->file('detail_4');
        $imageName4 = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/product-image', $file, $imageName4);

        $newProduct = new Product();

        $newProduct->product_name = $request->product_name;
        $newProduct->product_unique_id = $request->product_unique_id;
        $newProduct->description = $request->description;
        $newProduct->category_id = $request->category_id;
        $newProduct->color = $request->color;
        $newProduct->image = $imageName;
        $newProduct->detail_1 = 'product-image/'.$imageName1;
        $newProduct->detail_2 = 'product-image/'.$imageName2;
        $newProduct->detail_3 = 'product-image/'.$imageName3;
        $newProduct->detail_4 = 'product-image/'.$imageName4;

        $newProduct->save();
        return redirect('/dashboard')->with('notification', 'Product Successfully Added!');
    }
}
