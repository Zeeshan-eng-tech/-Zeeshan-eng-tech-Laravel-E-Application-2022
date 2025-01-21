<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function dashboard(){
        return view ('admin.dashboard');
    }
    ///products 
    public function products(){
        return view('create.products');
    }
    ///orders 
    public function orders(){
        return view('admin.products.orders');
    }
    

    
}
