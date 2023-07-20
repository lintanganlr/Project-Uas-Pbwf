<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{

    public function index()
    {
        $data['kategori'] = KategoriBarang::all();
        return view('Kategori.kategori-index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Buat Kategori';
        return view('Kategori.kategori-create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KategoriBarang::create($request->all());

        return redirect()->route('KategoriBarang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['kategori'] = KategoriBarang::find($id);

        return view('Kategori.kategori-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $kategori = KategoriBarang::find($id);
        $kategori->update($request->all());

        return redirect()->route('KategoriBarang.edit',$kategori);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        KategoriBarang::find($id)->delete();

        return redirect()->route('KategoriBarang.index');
    }
}
