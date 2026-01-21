<?php

namespace App\Filament\Resources\Pembelians\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PembeliansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pembelian')
                    ->label('Order ID')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                TextColumn::make('produk.nama')
                    ->label('Collection Item')
                    ->icon('heroicon-o-beaker')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Client')
                    ->icon('heroicon-o-user')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('banyak')
                    ->label('Qty')
                    ->numeric()
                    ->alignCenter(),
                TextColumn::make('bayar')
                    ->label('Amount')
                    ->money('idr')
                    ->weight('bold')
                    ->color('primary'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Verifikasi' => 'gray',
                        'Proses' => 'warning',
                        'Kirim' => 'info',
                        'Sampai' => 'success',
                        'Selesai' => 'primary',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Verifikasi' => 'heroicon-m-clock',
                        'Proses' => 'heroicon-m-arrow-path',
                        'Kirim' => 'heroicon-m-truck',
                        'Sampai' => 'heroicon-m-check-badge',
                        'Selesai' => 'heroicon-m-sparkles',
                    }),
                TextColumn::make('created_at')
                    ->label('Purchase Date')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
