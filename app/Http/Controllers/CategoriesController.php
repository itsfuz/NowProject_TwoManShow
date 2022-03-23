<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    //

    public function AddCategoryPage(){

        return view('admin.add_category');
    }

    public function AddCategory(Request $request){

        $rules = [
            'category_name' => 'required|unique'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return back()->withErrors($validator);
        }

        $newCategory = new Categories();
        $newCategory->category_name = $request->category_name;

        $newCategory->save();
    }
}
