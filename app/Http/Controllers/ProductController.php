<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Product;


class ProductController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$product = Product::all();

    	// mengirim data pegawai ke view pegawai
    	return view('product', ['product' => $product]);
    }

}