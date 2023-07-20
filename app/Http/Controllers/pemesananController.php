<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $data['pemesanan'] = pemesanan::all();
        return view('pemesanan.pemesanan-index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Buat pemesanan';
        return view('pemesanan.pemesanan-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pemesanan::create($request->all());

        return redirect()->route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pemesanan'] = pemesanan::find($id);

        return view('pemesanan.pemesanan-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pemesanan = pemesanan::find($id);
        $pemesanan->update($request->all());

        return redirect()->route('pemesanan.edit', $pemesanan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pemesanan::find($id)->delete();

        return redirect()->route('pemesanan.index');
    }
}
