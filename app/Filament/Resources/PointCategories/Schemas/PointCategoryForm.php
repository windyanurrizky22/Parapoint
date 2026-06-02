<?php

namespace App\Filament\Resources\PointCategories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class PointCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_type')
                        ->label('Tipe Kategori')
                        ->options([
                            'add' => 'Penambahan (Reward)',
                            'subtract' => 'Pengurangan (Penalty)'])
                        ->required(),
                TextInput::make('amount')
                        ->label('Jumlah Poin')
                        ->numeric()
                        ->required(),
                TextInput::make('description')
                        ->label('Keterangan Kategori')
                        ->required(),
            ]);
    }
}
