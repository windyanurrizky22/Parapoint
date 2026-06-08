<?php

namespace App\Filament\Resources\PointCategories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PointCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_type')
                    ->options([
                        'add' => 'Penambahan',
                        'subtract' => 'Pengurangan'
                    ])
                    ->required(),

                TextInput::make('amount')
                    ->numeric()
                    ->required(),

                TextInput::make('description')
                    ->required()
                         
            ]);
    }
}
