<?php

namespace App\Filament\Admin\Resources\PointCategories;

use App\Filament\Admin\Resources\PointCategories\Pages\CreatePointCategory;
use App\Filament\Admin\Resources\PointCategories\Pages\EditPointCategory;
use App\Filament\Admin\Resources\PointCategories\Pages\ListPointCategories;
use App\Filament\Admin\Resources\PointCategories\Pages\ViewPointCategory;
use App\Filament\Admin\Resources\PointCategories\Schemas\PointCategoryForm;
use App\Filament\Admin\Resources\PointCategories\Schemas\PointCategoryInfolist;
use App\Filament\Admin\Resources\PointCategories\Tables\PointCategoriesTable;
use App\Models\PointCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PointCategoryResource extends Resource
{
    protected static ?string $model = PointCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PointCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PointCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PointCategoriesTable::configure($table);
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
            'index' => ListPointCategories::route('/'),
            'create' => CreatePointCategory::route('/create'),
            'view' => ViewPointCategory::route('/{record}'),
            'edit' => EditPointCategory::route('/{record}/edit'),
        ];
    }
}
