<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AccessorMutatorController extends Controller
{
    public function index()
    {
        $data =Category::find(1);
        return $data;
    }
}
