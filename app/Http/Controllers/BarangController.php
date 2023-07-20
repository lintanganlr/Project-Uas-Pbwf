<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data['barang'] = barang::all();
        return view('Barang.Barang-index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Buat Barang';
        $data['kategori'] = KategoriBarang::all();
        return view('Barang.Barang-create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        barang::create($request->all());

        return redirect()->route('Barang.index');
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
        $data['Barang'] = barang::find($id);

        return view('Barang.Barang-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $Barang = barang::find($id);
        $Barang->update($request->all());

        return redirect()->route('Barang.edit',$Barang);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        barang::find($id)->delete();

        return redirect()->route('Barang.index');
    }
}
