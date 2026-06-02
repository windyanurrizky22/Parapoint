<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('class_id')
                    ->label('Kelas')
                    ->relationship('school_class','class_student')
                    ->searchable()
                    ->required(),
                TextInput::make('nis')
                    ->label('NIS')
                    ->requied(),
                TextInput::make('name')
                    ->label('Nama Siswa')
                    ->requied(),
                TextInput::make('current_point')
                    ->label('Poin saat ini')
                    ->numeric()
                    ->default(150)
                    ->requied(),
            ]);
    }
}
