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
                TextInput::make('nis')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Select::make('class_id')
                    ->relationship('schoolClass','class_student')
                    ->required()
                    ->searchable(),  
            
                
            ]);
    }
}
