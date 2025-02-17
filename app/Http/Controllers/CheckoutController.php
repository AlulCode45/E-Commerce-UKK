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
        return view('checkout', compact('produk', 'voucher','qty'));
    }

    public function checkoutProcess(Request $request)
    {

        if($request->file('bukti_pembayaran')){
            $file = $request->file('bukti_pembayaran');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'bukti_pembayaran';
            $file->move($tujuan_upload,$nama_file);
        }else{
            return back()->with('error','Terjadi Kesalahan');
        }
        $saveCheckout = Penjualan::create([
            'produk_id' => $request->produk_id,
            'voucher_id' => $request->voucher_id,
            'user_id' => auth()->user()->id,
            'qty' => $request->qty,
            'bukti_pembayaran' => 'bukti_pembayaran/'.$nama_file,
        ]);

        if ($saveCheckout){
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
