<?php

namespace App\Filament\Admin\Resources\PointCategories\Pages;

use App\Filament\Admin\Resources\PointCategories\PointCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPointCategory extends ViewRecord
{
    protected static string $resource = PointCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
