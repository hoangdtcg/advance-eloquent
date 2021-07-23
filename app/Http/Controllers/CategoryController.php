<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {

    }

    public function showAllPost($id)
    {
        $posts =  Category::find($id)->posts;
        dd($posts);
    }
}
