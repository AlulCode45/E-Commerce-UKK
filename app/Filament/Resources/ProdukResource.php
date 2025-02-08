<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_produk')
                    ->required(),
                Forms\Components\TextInput::make('nama_produk')
                    ->required(),
                Forms\Components\MarkdownEditor::make('deskripsi')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('harga_produk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('stok_produk')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('kategori_id')
                    ->searchable()
                    ->preload()
                    ->columnSpanFull()
                    ->relationship('kategori', 'kategori')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_produk')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_produk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('stok_produk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori.kategori'),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListProduks::route('/'),
//            'create' => Pages\CreateProduk::route('/create'),
//            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
