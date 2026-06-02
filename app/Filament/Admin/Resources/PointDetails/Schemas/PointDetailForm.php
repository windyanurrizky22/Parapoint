<?php

namespace App\Filament\Admin\Resources\PointDetails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PointDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('student_id')
                    ->required()
                    ->numeric(),
                TextInput::make('teacher_id')
                    ->required()
                    ->numeric(),
                TextInput::make('category_id')
                    ->required()
                    ->numeric(),
                TextInput::make('initial_point')
                    ->required()
                    ->numeric(),
                TextInput::make('remaining_point')
                    ->required()
                    ->numeric(),
            ]);
    }
}
