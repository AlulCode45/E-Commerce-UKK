<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Voucher;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutPage(Request $request)
    {
        $produk = Produk::query()->find($request->produk_id);
        $voucher = Voucher::where('kode_voucher', $request->kode_voucher)->first();
        $qty = $request->qty;

        if($voucher && $qty > $voucher->jumlah){
            return back()->with('error','Jumlah Penggunaan voucher melebihi jumlah voucher');
        }
        return view('checkout', compact('produk', 'voucher','qty'));
    }

    public function checkoutProcess(Request $request)
    {

        if($request->file('bukti_pembayaran')){
            $file = $request->file('bukti_pembayaran');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'storage/bukti_pembayaran';
            $file->move($tujuan_upload,$nama_file);
        }

        $saveCheckout = Penjualan::create([
            'produk_id' => $request->produk_id,
            'voucher_id' => $request->voucher_id,
            'user_id' => auth()->user()->id,
            'qty' => $request->qty,
            'pengiriman' => $request->pengiriman,
            'bukti_pembayaran' => 'bukti_pembayaran/'.$nama_file,
            'total' => $request->total,
        ]);

        if ($saveCheckout){
            $voucher = Voucher::query()->find($request->voucher_id);
            if ($voucher){
                $voucher->update([
                    'jumlah' =>  $voucher->stok - $request->qty,
                ]);
            }
            return redirect()->to('/checkout-done');
        }else{
            return back()->with('error','Terjadi Kesalahan');
        }
    }
    public function checkoutDone()
    {
        return view('checkout-success');
    }
}
