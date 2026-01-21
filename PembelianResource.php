<?php

namespace App\Filament\Resources\Pembelians;

use App\Filament\Resources\Pembelians\Pages\CreatePembelian;
use App\Filament\Resources\Pembelians\Pages\EditPembelian;
use App\Filament\Resources\Pembelians\Pages\ListPembelians;
use App\Filament\Resources\Pembelians\Pages\ViewPembelian;
use App\Filament\Resources\Pembelians\Schemas\PembelianForm;
use App\Filament\Resources\Pembelians\Schemas\PembelianInfolist;
use App\Filament\Resources\Pembelians\Tables\PembeliansTable;
use App\Models\Pembelian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PembelianResource extends Resource
{
    protected static ?string $model = Pembelian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'PembelianResource';

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        // Admin bisa lihat semua pembelian, user biasa hanya lihat miliknya sendiri
        if (Auth::user()->role !== 'Admin') {
            $query->where('user_id', Auth::id());
        }

        return $query;
    }

    public static function form(Schema $schema): Schema
    {
        return PembelianForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PembelianInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PembeliansTable::configure($table);
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
            'index' => ListPembelians::route('/'),
            'view' => ViewPembelian::route('/{record}'),
            'edit' => EditPembelian::route('/{record}/edit'),
        ];
    }
}
