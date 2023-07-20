<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Pembayaran;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function show($id)
    {
        $barang = Barang::find($id);
    }


    public function addToCart(Request $request)
    {


        $barang = Barang::find($request->id_barang);

        Pemesanan::create([
            'user_id' => Auth::user()->id,
            'tanggal_pemesanan' => Carbon::now(),
            'status_pemesanan' => 'pending',
            'total_pemesanan' => $barang->harga_barang
        ]);


        return redirect()->route('cart');
    }

    public function cart()
    {

        $user_id = Auth::user()->id;
        $cart = Pemesanan::where('user_id', $user_id)->where('status_pemesanan', 'pending')->get();

        return view('cart', compact('cart'));
    }


    public function pembayaran()
    // Harusnya ini pembayaran($id) , untuk $id nya bisa kamu dapet dari id barang
    {
        $data['title'] = 'Pembayaran';
        // $pemesanan = Pemesanan::find($id);

        return view('beranda.pembayaran',$data);
    }


    public function pay($id)
    {
        // Ini pay($id) pake id pemesanan
        $pemesanan = Pemesanan::find($id);
        Pembayaran::create([
            'id_pemesanan' => $pemesanan->id,
            'tanggal_pembayaran' => Carbon::now(),
            'total_pembayaran' => $pemesanan->total_pemesanan,
            'status_pembayaran' => 'Selesai'
        ]);


        return redirect()->route('cart');

    }



    public function detailPesanan($id)
    {
        $pesanan = Pemesanan::find($id);
    }
}
