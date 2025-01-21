<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productsController extends Controller
{
    
    public function create(){
      return view('admin.products.create');
    }
    //ALL products 
    public function all(){
      return view('admin.products.all');
    }

    public function categories(){
    return view('admin.products.categories');
    }

}
