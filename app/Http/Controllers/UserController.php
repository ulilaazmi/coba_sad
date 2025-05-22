<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Antrian;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $layanans = Layanan::all();
        return view('users.layanan');
    }

    // public function submit(Request $request)
    // {
    //     $request->validate([
    //         'layanan_id' => 'required|exists:layanans,id',
    //     ]);

    //     $nomor = Antrian::max('nomor') + 1;

    //     Antrian::create([
    //         'layanan_id' => $request->layanan_id,
    //         'nomor' => $nomor,
    //         'status' => 'Menunggu',
    //     ]);

    //     return redirect('/user')->with('success', 'Berhasil mengambil nomor antrian: ' . $nomor);
    // }
}
