<?php

namespace App\Filament\Admin\Resources\PointDetails\Pages;

use App\Filament\Admin\Resources\PointDetails\PointDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPointDetail extends ViewRecord
{
    protected static string $resource = PointDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
