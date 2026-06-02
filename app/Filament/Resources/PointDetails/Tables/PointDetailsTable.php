<?php

namespace App\Filament\Resources\PointDetails\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class PointDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('student.schoolClass.class_student')
                    ->label('Kelas')
                    ->badge(),
                TextColumn::make('pointCategory.description')
                    ->label('Keterangan'),
                TextColumn::make('teacher.teacher_name')
                    ->label('Guru Pelapor'),
                TextColumn::make('occurrence_number')
                    ->label('Jumlah kejadian')
                    ->badge(),
                TextColumn::make('amount')
                    ->label('Jumlah poin')
                    ->badge(),
                TextColumn::make('counted_point')
                    ->label('Sisa poin')
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteBulkAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
