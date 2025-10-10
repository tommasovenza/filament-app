<?php

namespace App\Filament\Resources\Products\Schemas;

use App\ProductStatusEnum;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')
                    ->required()
                    ->rule('min:3')
                    ->rule('max:30')
                    ->unique(),
                // both syntax are good
                // ->rules(['min:3', 'max:10'])
                // there are also these helpers ==> // ->minLength(3) // ->maxLength(10);
                TextInput::make('price')
                    ->numeric()
                    ->maxValue(4999)
                    ->required(),
                Textarea::make('description')->required(),
                // 1CASE
                // select make using ENUM
                // Select::make('status')->options(ProductStatusEnum::class)->required(),
                // radio buttons make using ENUM
                Radio::make('status')->options(ProductStatusEnum::class)->required(),
                // 2CASE

                // Select using relationships between models

                Select::make('category_id')
                    ->relationship('category', 'name'),

                // Alternative Syntax
                // Select::make('category_id')
                //     ->relationship('category')
                //     ->getOptionLabelFromRecordUsing(fn(Model $record) => $record->name)
            ]);
    }
}
