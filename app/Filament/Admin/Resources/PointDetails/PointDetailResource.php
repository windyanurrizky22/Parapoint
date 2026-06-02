<?php

namespace App\Filament\Admin\Resources\PointDetails;

use App\Filament\Admin\Resources\PointDetails\Pages\CreatePointDetail;
use App\Filament\Admin\Resources\PointDetails\Pages\EditPointDetail;
use App\Filament\Admin\Resources\PointDetails\Pages\ListPointDetails;
use App\Filament\Admin\Resources\PointDetails\Pages\ViewPointDetail;
use App\Filament\Admin\Resources\PointDetails\Schemas\PointDetailForm;
use App\Filament\Admin\Resources\PointDetails\Schemas\PointDetailInfolist;
use App\Filament\Admin\Resources\PointDetails\Tables\PointDetailsTable;
use App\Models\PointDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PointDetailResource extends Resource
{
    protected static ?string $model = PointDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PointDetailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PointDetailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PointDetailsTable::configure($table);
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
            'index' => ListPointDetails::route('/'),
            'create' => CreatePointDetail::route('/create'),
            'view' => ViewPointDetail::route('/{record}'),
            'edit' => EditPointDetail::route('/{record}/edit'),
        ];
    }
}
