<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('nis')
                    ->required()
                    ->unique(ignoreRecord:true)
                    ->numeric(),

                Select::make('class_id')
                    ->relationship('schoolClass','class_student')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('current_point')
                    ->numeric()
                    ->default(150)
                    ->required(),
            ]);
    }
}
