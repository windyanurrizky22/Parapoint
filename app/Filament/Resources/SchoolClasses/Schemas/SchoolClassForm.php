<?php

namespace App\Filament\Resources\SchoolClasses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SchoolClassForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class_student')
                    ->required()
                    ->unique('school_classes','class_student', ignoreRecord:true)
                    ->validationMessages([
                        'unique'=>'Kelas ini sudah terdafdar, silahkan gunakan nama lain.',
                    ]),
            ]);
    }
}
