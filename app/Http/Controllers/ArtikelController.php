<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Artikel;
use App\User;
use DB;

class ArtikelController extends Controller
{
    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->slug = $request->slug;
        $artikel->tag = $request->tag;
        $artikel->user_id = $request->user_id;
        $artikel->save();

    	return redirect()->route('artikel.index', $request->get('user_id'));
    }

    public function index()
    {
        $artikel = Artikel::all();

        return view('artikel.index', compact('artikel'));
    }

    public function show($id)
    {
        $artikel = Artikel::all();

        return view('artikel.detail', compact('artikel'));
    }

    public function edit($id)
    {
    	$artikel = Artikel::find($id);

    	return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
    	$artikel = Artikel::find($id);

    	$artikel->update($request->all());

    	return redirect('/artikel');
    }

    public function delete($id)
    {
    	$artikel = Artikel::find($id);

    	$artikel->delete();
    	
    	return redirect('/artikel')->with('delete', 'Delete data sukses!');
    }
}
