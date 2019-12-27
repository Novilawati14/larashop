<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Foods;

class FoodsController extends Controller
{
    public function index()
    {
    	$foods = Foods::all();
    	return view('foods', ['foods' => $foods]);
    }

    public function tambah()
    {
    	return view('tambah_menu');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'menu' => 'required',
    		'harga' => 'required',
    		'gambar' => 'required',
    	]);
 
        foods::create([
    		'menu' => $request->menu,
    		'harga' => $request->harga,
    		'gambar' => $request->gambar,
    	]);
 
    	return redirect('/food');
    }

    public function edit($id)
	{
   		$foods = foods::find($id);
   		return view('edit_menu', ['foods' => $foods]);
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
		   'menu' => 'required',
		   'harga' => 'required',
		   'gambar' => 'required'
	    ]);
	 
	    $foods = foods::find($id);
	    $foods->menu = $request->menu;
	    $foods->harga = $request->harga;
	    $foods->gambar = $request->gambar;
	    $foods->save();
	    return redirect('/food');
	}

    public function hapus($id)
    {
    	$foods = foods::find($id);
	    $foods->delete();
	    return redirect('/food');
    }

    public function trash()
	{
    	// mengampil menu yang sudah dihapus
    	$foods = foods::onlyTrashed()->get();
    	return view('menu_trash', ['foods' => $foods]);
	}

	public function daftar_menu()
    {
    	$foods = Foods::all();
    	return view('daftar_menu', ['foods' => $foods]);
    }
}