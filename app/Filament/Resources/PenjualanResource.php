<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenjualanResource\Pages;
use App\Filament\Resources\PenjualanResource\RelationManagers;
use App\Models\Penjualan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenjualanResource extends Resource
{
    protected static ?string $model = Penjualan::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('produk_id')
                    ->label('Produk')
                    ->relationship('produk', 'nama_produk')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('voucher_id')
                    ->label('Voucher')
                    ->relationship('voucher', 'nama')
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('qty')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->options([
                        'menunggu' => 'menunggu',
                        'diproses' => 'diproses',
                        'selesai' => 'selesai'
                    ]),
                Forms\Components\FileUpload::make('bukti_pembayaran')
                    ->label('Bukti Pembayaran')
                    ->directory('bukti_pembayaran')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('bukti_pembayaran')
                    ->url(fn($record) => asset($record->bukti_pembayaran))
                    ->height(100),
                Tables\Columns\TextColumn::make('produk.nama_produk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('voucher.nama')
                    ->badge()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('qty')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(Penjualan $penjualan) => $penjualan->status === 'diproses'
                        ? 'warning'
                        : ($penjualan->status === 'selesai' ? 'success' : 'danger')
                    )
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('Konfirmasi')
                    ->hidden(fn(Penjualan $penjualan) => $penjualan->status == 'diproses' || $penjualan->status == 'selesai')
                    ->label('Konfirmasi')
                    ->action(function ($record) {
                        $record->update(['status' => 'diproses']);
                        Notification::make()
                            ->title('Konfirmasi Berhasil')
                            ->success()
                            ->send();
                    })
                    ->requiresConfirmation()
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->tooltip('Klik untuk mengonfirmasi')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenjualans::route('/'),
            // 'create' => Pages\CreatePenjualan::route('/create'),
            // 'edit' => Pages\EditPenjualan::route('/{record}/edit'),
        ];
    }
}
