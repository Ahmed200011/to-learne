<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('News.AllNews')->with('name','ahmed');
    }
    public function edit(){
        return view('News.EditNews');
    }
    public function add(){
        return view('News.AddNews');
    }
    public function delete(){
        return view('News.DeleteNews');
    }
}
