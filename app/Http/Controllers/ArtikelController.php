<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Comment;
use App\Tags;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikels=\App\Artikel::all();
        $tag = Tags::all();
        return view('index',compact('artikels'))->withTag($tag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tag = Tags::all();
        return view('create')->withTag($tag);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $artikel = new \App\Artikel;
        $artikel ->judul = $request->get('judul');
        $artikel ->deskripsi = $request->get('deskripsi');
        $artikel ->pembuat = $request->get('pembuat');
        $artikel ->kategori = $request->get('kategori');

        if($request->file('foto') == "")
        {
            $artikel->foto = $artikel->foto;
        }
        else
        {
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("foto/", $fileName);
            $artikel->foto = $fileName;
        }
        $artikel->update();
        $artikel->save();
        $artikel->tags()->sync($request->tags, false);
        return redirect('artikels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $artikel = \App\Artikel::find($id);
        $com = \App\Comment::where('post_id', $id)->get();
        return view('artikelpost',compact('artikel','id'))->withCome($com);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artikel = \App\Artikel::find($id);
        $katt  = \App\Categorie::all();
        $tag = \App\Tags::all();
        return view('edit',compact('artikel','id'))->withKatt($katt)->withTag($tag);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $artikel= \App\Artikel::find($id);
        $artikel ->judul = $request->get('judul');
        $artikel ->deskripsi = $request->get('deskripsi');
        $artikel ->pembuat = $request->get('pembuat');
        $artikel ->kategori = $request->get('kategori');

        if($request->file('foto') == "")
        {
            $artikel->foto = $artikel->foto;
        }
        else
        {
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("foto/", $fileName);
            $artikel->foto = $fileName;
        }
        $artikel->update();
        $artikel->save();
        return redirect('artikels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artikel = \App\Artikel::find($id);
        $artikel->delete();
        return redirect('artikels');
    }
}
