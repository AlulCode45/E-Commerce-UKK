<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $pembelians = Penjualan::query()
            ->with(['produk', 'user', 'voucher'])
            ->where('user_id', auth()->user()->id)
            ->get();

        $menunggu = Penjualan::query()
            ->where('user_id', auth()->user()->id)
            ->where('status', 'menunggu')
            ->count();
        $diproses = Penjualan::query()
            ->where('user_id', auth()->user()->id)
            ->where('status', 'diproses')
            ->count();

        $selesai = Penjualan::query()
            ->where('user_id', auth()->user()->id)
            ->where('status', 'selesai')
            ->count();
        return view('dashboard-user.dashboard', compact('pembelians', 'menunggu', 'diproses', 'selesai'));
    }

    public function konfirmasiPembelian($id, Request $request)
    {
        $nama_file = NULL;
        if ($request->file('bukti_diterima')) {
            $file = $request->file('bukti_diterima');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'storage/bukti_diterima';
            $file->move($tujuan_upload, $nama_file);
        }

        $penjualan = Penjualan::query()->find($id);
        if ($penjualan->update([
            'status' => 'selesai',
            'bukti_diterima' => ($nama_file ? 'bukti_diterima/' . $nama_file  : NULL),
        ])) {
            return back()->with('success', 'Konfirmasi berhasil');
        } else {
            return back()->with('error', 'Konfirmasi gagal');
        }
    }
}
