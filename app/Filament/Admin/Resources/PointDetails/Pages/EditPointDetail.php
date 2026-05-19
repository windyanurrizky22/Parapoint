<?php

namespace App\Filament\Admin\Resources\PointDetails\Pages;

use App\Filament\Admin\Resources\PointDetails\PointDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPointDetail extends EditRecord
{
    protected static string $resource = PointDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
