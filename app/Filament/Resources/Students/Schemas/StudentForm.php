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
            ->components(components: [
                TextInput::make('name')
                    ->required(),
                TextInput::make('nis')
                    ->required(),
                Select::make('class_id')
                    ->relationship('schoolClass','class_student')
                    ->required()
                    ->preload()
                    ->searchable(),
                TextInput::make('current_point')
                    ->numeric()
                    ->default(150)
                    ->required(),
            
                
            ]);
    }
}
