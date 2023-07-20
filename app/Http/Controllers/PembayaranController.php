<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $data['pembayaran'] = pembayaran::all();
        return view('pembayaran.pembayaran-index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Buat pembayaran';
        return view('pembayaran.pembayaran-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pembayaran::create($request->all());

        return redirect()->route('pembayaran.index');
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
        $data['pembayaran'] = pembayaran::find($id);

        return view('pembayaran.pembayaran-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $pembayaran = pembayaran::find($id);
        $pembayaran->update($request->all());

        return redirect()->route('pembayaran.edit', $pembayaran);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        pembayaran::find($id)->delete();

        return redirect()->route('pembayaran.index');
    }
}
