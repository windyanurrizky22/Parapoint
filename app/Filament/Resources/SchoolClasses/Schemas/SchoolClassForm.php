<?php

namespace App\Filament\Resources\SchoolClasses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class SchoolClassForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class_student')
                        ->label('Nama Kelas')
                        ->required()
            ]);
    }
}
