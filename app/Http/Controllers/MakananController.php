<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Menampilkan data makanan
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return Makanan::all();
    }

    /**
     * Menambah data makanan
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $makanan = new Makanan();
        $makanan->nama = $request->nama;
        $makanan->asal = $request->asal;
        $makanan->url_foto = $request->url_foto;
        $makanan->harga = $request->harga;
        $makanan->save();

        return "Makanan Berhasil Ditambahkan";
    }

    /**
     * Untuk mengubah data makanan
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $asal = $request->asal;
        $url_foto = $request->url_foto;
        $harga = $request->harga;

        $makanan = Makanan::find($id);
        $makanan->nama = $nama;
        $makanan->asal = $asal;
        $makanan->url_foto = $url_foto;
        $makanan->harga = $harga;
        $makanan->save();

        return "Makanan Berhasil Diubah";
    }

    /**
     * Menghapus makanan
     *
     * @param  \App\Models\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $makanan = Makanan::find($id);
        $makanan->delete();

        return "Makanan Berhasil Dihapus";
    }
}
