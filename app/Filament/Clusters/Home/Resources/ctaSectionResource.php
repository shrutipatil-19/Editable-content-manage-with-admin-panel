<?php

namespace App\Filament\Clusters\Home\Resources;

use App\Filament\Clusters\Home;
use App\Filament\Clusters\Home\Resources\ctaSectionResource\Pages;
use App\Filament\Clusters\Home\Resources\ctaSectionResource\RelationManagers;
use App\Models\ctaSections;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ctaSectionResource extends Resource
{
    protected static ?string $model = ctaSections::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = Home::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cta_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('cta_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('cta_button_text')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cta_button_link')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cta_button_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cta_button_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cta_created_at')
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
            'index' => Pages\ListctaSections::route('/'),
            'create' => Pages\CreatectaSection::route('/create'),
            'edit' => Pages\EditctaSection::route('/{record}/edit'),
        ];
    }
}
