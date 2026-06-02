<?php

namespace App\Filament\Admin\Resources\Students\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nis')
                    ->required(),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
