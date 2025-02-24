<?php

namespace App\Filament\Widgets;

use App\Models\Penjualan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $jumlahPenjualan = Penjualan::count();
        $menungguKonfirmasi = Penjualan::query()->where('status', 'menunggu')->count();
        $menungguDiproses = Penjualan::query()->where('status', 'diproses')->count();
        $jumlahSelesai = Penjualan::query()->where('status', 'selesai')->count();
        return [
            Stat::make('Jumlah Penjualan', $jumlahPenjualan)
                ->description('Produk')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Menunggu Konfirmassi', $menungguKonfirmasi)
                ->description('Produk')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Pesanan diproses', $menungguDiproses)
                ->description('Produk')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Pesanan Selesai', $jumlahSelesai)
                ->description('Produk')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
