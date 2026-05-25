<?php

namespace App\Filament\Admin\Resources\PointDetails\Pages;

use App\Filament\Admin\Resources\PointDetails\PointDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPointDetails extends ListRecords
{
    protected static string $resource = PointDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
