<?php

namespace App\Http\Controllers;

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

    public function checkoutDone()
    {
        return view('checkout-success');
    }
}
