<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categorie;
use App\Brand;

class FrontController extends Controller
{
    public function cells() {
        $cells = Product::where('categorie_id', 1)->get();
        return view('front/celulares', ['celulares' => $cells]);
    }

    public function cell($id) {
        $products = Product::all();
        $cell = Product::find($id);
        return view('front/celu', ['celu' => $cell, 'producto' => $products]);
    }

    public function accesorio() {
        return view('front/accesorios');
    }

    public function faq(){
        return view('front/faq');
    }
}
