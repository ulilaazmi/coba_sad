<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Layanan;


class AdminController extends Controller
{
    public function index(){
        return view ('admin.dashboard');
    }

     public function tambah_layanan()
    {
        return view('admin.layanan');
    }

    public function upload_layanan(Request $request)
{
    // Validasi input (opsional tapi disarankan)
    $request->validate([
        'nama_layanan' => 'required|string|max:255',
        'detail_layanan' => 'required|string',
        'harga_layanan' => 'required|numeric',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // optional
    ]);

    $data = new Layanan;

    $data->nama_layanan = $request->nama_layanan;
    $data->detail_layanan = $request->detail_layanan;
    $data->harga_layanan = $request->harga_layanan;

    // Cek apakah ada file yang di-upload
    if ($request->hasFile('img')) {
        $image = $request->file('img'); // ambil file dengan aman
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('layanan_img'), $filename); // simpan file di public/layanan_img
        $data->image_layanan = $filename; // simpan nama file ke database
    }

    $data->save();

    return redirect()->back()->with('success', 'Layanan berhasil ditambahkan!');
}

}
