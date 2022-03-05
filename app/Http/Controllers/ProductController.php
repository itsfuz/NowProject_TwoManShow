<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function getProducts(){

        $allProducts = Product::all();
        $allCategories = Categories::all();

        return view('bla')
        ->with('allProducts', $allProducts)
        ->with('allCategories', $allCategories);

        //in the main page
        foreach ($allCategories as $category){

            //print category name

            foreach ($allProducts as $product){

                if($product->category_id == $category->id){

                    //print data
                }
            }

        }


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
}
