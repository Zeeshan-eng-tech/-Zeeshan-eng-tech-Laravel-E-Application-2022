<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //home 
    public function home(){
        return view('welcome');
    } 
    //about
    public function about(){
        return view('about');
    }
     ///contact 
     public function contact(){
        return view('contact');
     }
     ///cart
     public function shop(){
        return view('shop');
     }
     ///checkout
     public function checkout(){
        return view('checkout');
    }
    //Admin Zeeshan
    //public function Zeeshan(){
      //  return view('welcome');
    //}
    //shop cart
    public function cart(){
        return view('cart');
    }
}
