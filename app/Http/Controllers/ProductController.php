<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class productController extends Controller
{
    
 
    public function index()
    {
    	$product= Product::all();
    	return view('content/product', ['product' => $product]);
    }

        public function tambah()
    {
    	return view('content/product_tambah');
    }

       public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'harga' => 'required',
    		'jumlah' => 'required'
    	]);
 
        Product::create([
    		'nama' => $request->nama,
    		'harga' => $request->harga,
    		'jumlah' => $request->jumlah
    	]);
 
    	return redirect('product');
    }

    public function edit($id)
	{
	   $product = Product::find($id);
	   return view('content/product_edit', ['product' => $product]);
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
		   'nama' => 'required',
		   'harga' => 'required',
		   'jumlah' => 'required'
	    ]);

	    $product = Product::find($id);
	    $product->nama = $request->nama;
	    $product->harga = $request->harga;
	    $product->jumlah = $request->jumlah;
	    $product->save();
	    return redirect('product');
	}

	public function delete($id)
	{
	    $product = Product::find($id);
	    $product->delete();
	    return redirect('product');
	}

	
	 
}

