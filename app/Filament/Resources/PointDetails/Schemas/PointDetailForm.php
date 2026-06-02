<?php

namespace App\Filament\Resources\PointDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PointDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->relationship('student','name')
                    ->required()
                    ->searchable()
                    ->label('Student'),

                Select::make('teacher_id')
                    ->relationship('teacher','teacher_name')
                    ->required()
                    ->searchable()
                    ->label('Teacher'),

                Select::make('category_id')
                    ->relationship('point_category','name')
                    ->required()
                    ->searchable()
                    ->label('PointCategory'),
                
                TextInput::make('occurrence_number')
                    ->required()
                    ->numeric(),
                
                TextInput::make('amount')
                    ->required()
                    ->numeric(),

                TextInput::make('counted_point')
                    ->required()
                    ->numeric(),
            ]);
    }
}
