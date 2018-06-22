<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }
    public function addGet(){
        return view('admin.category.add');
    }

    public function addPost(CategoryRequest $request){
        echo $request->status;
//        $category = new Category;
//        $category->id = $request->id;
//        $category->categoryName = $request->categoryName;
//        $category->save();

    }

}
