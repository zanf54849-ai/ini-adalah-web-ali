<?php

namespace App\Filament\Resources\Pembelians\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PembelianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Transaction Detail')
                    ->description('Order tracking and item selection.')
                    ->icon('heroicon-o-shopping-cart')
                    ->columns(2)
                    ->schema([
                        TextInput::make('kode_pembelian')
                            ->prefixIcon('heroicon-o-hashtag')
                            ->required()
                            ->unique(ignorable: fn($record) => $record)
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                        Select::make('produk_id')
                            ->relationship('produk', 'nama')
                            ->prefixIcon('heroicon-o-beaker')
                            ->required()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                    ]),

                Section::make('Customer & Quantity')
                    ->description('Quantity ordered and customer attribution.')
                    ->icon('heroicon-o-user')
                    ->columns(2)
                    ->schema([
                        TextInput::make('banyak')
                            ->prefixIcon('heroicon-o-shopping-bag')
                            ->required()
                            ->numeric()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                        Select::make('user_id')
                            ->relationship('user', 'name')
                            ->prefixIcon('heroicon-o-identification')
                            ->required()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                    ]),

                Section::make('Payment & Status')
                    ->description('Financial details and order lifecycle.')
                    ->icon('heroicon-o-credit-card')
                    ->columns(2)
                    ->schema([
                        TextInput::make('bayar')
                            ->prefix('Rp')
                            ->required()
                            ->numeric()
                            ->disabled(fn () => auth()->user()->role === 'Admin'),
                        Select::make('status')
                            ->options([
                                'Verifikasi' => 'Verifikasi',
                                'Proses' => 'Proses',
                                'Kirim' => 'Kirim',
                                'Sampai' => 'Sampai',
                                'Selesai' => 'Selesai',
                            ])
                            ->required()
                            ->native(false)
                            ->prefixIcon('heroicon-o-check-circle'),
                    ]),
            ]);
    }
}
