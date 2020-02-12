<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use App\Product;

class productController extends Controller
{
    
 
    public function index()
    {
    	$product= Product::all();

      $product = DB::table('product')->paginate(1);

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
    		'jumlah' => 'required',
    		'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    	]);

    	     $files = $request->file('fileUpload');
           $destinationPath = 'image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
           
           $product = new Product;
           $product->nama = $request->nama;
           $product->harga = $request->harga;
           $product->jumlah = $request->jumlah;
           $product->image = $insert['image'] = "$profileImage";
           $product->save();
 
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
		   'jumlah' => 'required',
		   'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
	    ]);

	    $product = Product::find($id);

	   if ($files = $request->file('fileUpload')){
            $usersImage = public_path("image/{$product->image}"); // get previous image from folder
        
         if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }
        $destinationPath = 'image/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $insert['image'] = "$profileImage";

        
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->jumlah = $request->jumlah;
        $product->image = $insert['image'] = "$profileImage";
     }
        $product->save();
        return redirect('product');
    }

public function delete($id)
	{
	    $gambar = Product::where('id',$id)->first();
        File::delete('image/'.$gambar->image);

	    $product = Product::find($id);
	    $product->delete();
	    return redirect('product');
	}
	
  public function cari(Request $request)
  {
    // menangkap data pencarian
    $cari = $request->cari;

    // mengambil data dari table product sesuai pencarian data
    $product = DB::table('product')
    ->where('nama','like',"%".$cari."%")
    ->paginate();

        // mengirim data product ke view index
    return view('content/product', ['product' => $product]);

  }
	 
}

