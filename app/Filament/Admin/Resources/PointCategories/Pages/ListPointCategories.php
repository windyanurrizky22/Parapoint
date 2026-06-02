<?php

namespace App\Filament\Admin\Resources\PointCategories\Pages;

use App\Filament\Admin\Resources\PointCategories\PointCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPointCategories extends ListRecords
{
    protected static string $resource = PointCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
