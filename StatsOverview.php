<?php

namespace App\Filament\Widgets;

use App\Models\Pembelian;
use App\Models\Produk;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected ?string $pollingInterval = '15s';

    protected function getStats(): array
    {
        $user = auth()->user();

        if ($user->role === 'Admin') {
            $revenue = Pembelian::where('status', 'Selesai')->sum('bayar');
            $ordersCount = Pembelian::count();
            $productsCount = Produk::count();

            return [
                Stat::make('Gross Revenue', 'Rp ' . number_format($revenue, 0, ',', '.'))
                    ->description('Total fragrance sales (Completed)')
                    ->descriptionIcon('heroicon-m-currency-dollar')
                    ->color('success')
                    ->chart([7, 2, 10, 3, 15, 4, 17]),

                Stat::make('Total Orders', $ordersCount)
                    ->description('Total customer acquisitions')
                    ->descriptionIcon('heroicon-m-shopping-cart')
                    ->color('primary'),

                Stat::make('Active Collection', $productsCount)
                    ->description('Total fragrance items')
                    ->descriptionIcon('heroicon-m-beaker')
                    ->color('warning'),
            ];
        }

        // Stats for Guest
        $myOrdersCount = Pembelian::where('user_id', $user->id)->count();
        $myCompletedOrders = Pembelian::where('user_id', $user->id)->where('status', 'Selesai')->count();

        return [
            Stat::make('My Orders', $myOrdersCount)
                ->description('Total purchases made')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('primary'),

            Stat::make('Completed Orders', $myCompletedOrders)
                ->description('Successfully delivered items')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
        ];
    }
}
