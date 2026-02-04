<?php

namespace App\Filament\Widgets;

use App\Models\Pembelian;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class CompletedOrders extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    public static function canView(): bool
    {
        return auth()->user()->role === 'Admin';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Pembelian::query()->where('status', 'Selesai')->latest()->limit(5)
            )
            ->heading('Recently Completed Collections')
            ->columns([
                TextColumn::make('kode_pembelian')
                    ->label('ID')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('produk.image')
                    ->label('Product')
                    ->disk('public')
                    ->square(),
                TextColumn::make('produk.nama')
                    ->label('Parfume'),
                TextColumn::make('user.name')
                    ->label('Client'),
                TextColumn::make('bayar')
                    ->label('Total')
                    ->money('idr')
                    ->weight('bold'),
                TextColumn::make('status')
                    ->badge()
                    ->color('success'),
            ])
            ->actions([
                \Filament\Actions\Action::make('view')
                    ->url(fn (Pembelian $record): string => "/admin/pembelians/{$record->id}")
                    ->icon('heroicon-m-eye'),
            ]);
    }
}
