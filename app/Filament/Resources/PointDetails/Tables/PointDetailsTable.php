<?php

namespace App\Filament\Resources\PointDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PointDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->rowIndex(),

                TextColumn::make('student.name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('teacher.teacher_name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('pointCategory.description')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('amount')
                    ->alignCenter(),

                TextColumn::make('occurrence_number')
                    ->alignCenter(),

                TextColumn::make('counted_point')
                    ->badge()
                    ->color(fn ($state) => $state < 0 ? 'danger' : 'success')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
