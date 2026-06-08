<?php

namespace App\Filament\Resources\PointDetails\Schemas;

use App\Models\PointCategory;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class PointDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->relationship('student','name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('teacher_id')
                    ->relationship('teacher','teacher_name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('category_id')
                    ->relationship('pointCategory','description')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->live() // KUNCI UTAMA: Agar form mendeteksi perubahan saat diklik
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                    // $state berisi ID kategori yang dipilih
                    $category = PointCategory::find($state);
                    
                    if ($category) {
                        // 1. Otomatis isi kolom 'amount' dengan data dari tabel PointCategory
                        $set('amount', $category->amount);
                        
                        // 2. Langsung hitung perkalian untuk 'counted_point'
                        $occurrence = (int) ($get('occurrence_number') ?? 1);
                        $set('counted_point', $category->amount * $occurrence);
                    }
                }),

                TextInput::make('amount')
                    ->numeric()
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::updateCountedPoint($get, $set)),

                TextInput::make('occurrence_number')
                    ->numeric()
                    ->default(1)
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn (Get $get, Set $set) => self::updateCountedPoint($get, $set)),

                TextInput::make('counted_point')
                    ->numeric()
                    ->readOnly(),
            ]);
    }

    public static function updateCountedPoint(Get $get, Set $set): void
    {
        $amount = (int) $get('amount');
        $occurrence = (int) $get('occurrence_number');
        $set('counted_point', $amount * $occurrence);
    }
}
