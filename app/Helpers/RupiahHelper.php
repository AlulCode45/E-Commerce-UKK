<?php

namespace App\Helpers;

class RupiahHelper
{
    public static function formatRupiah($angka)
    {
        if ($angka == null) {
            return 'Rp 0';
        }

        // Format angka menjadi format Rupiah
        return 'Rp ' . number_format($angka, 0, ',', '.');
    }
}
