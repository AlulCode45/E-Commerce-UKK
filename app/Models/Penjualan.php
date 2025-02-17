<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->belongsTo(Produk::class,'produk_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class,'voucher_id');
    }
}
