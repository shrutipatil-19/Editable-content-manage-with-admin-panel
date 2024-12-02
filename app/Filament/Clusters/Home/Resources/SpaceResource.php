<?php

namespace App\Filament\Clusters\Home\Resources;

use App\Filament\Clusters\Home;
use App\Filament\Clusters\Home\Resources\SpaceResource\Pages;
use App\Filament\Clusters\Home\Resources\SpaceResource\RelationManagers;
use App\Models\Space;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpaceResource extends Resource
{
    protected static ?string $model = Space::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = Home::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('space_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('space_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('space_image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('space_price')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('space_amenities')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('space_btn_text')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('space_btn_link')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('space_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('space_image'),
                Tables\Columns\TextColumn::make('space_price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('space_amenities')
                    ->searchable(),
                Tables\Columns\TextColumn::make('space_btn_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('space_btn_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSpaces::route('/'),
            'create' => Pages\CreateSpace::route('/create'),
            'edit' => Pages\EditSpace::route('/{record}/edit'),
        ];
    }
}
