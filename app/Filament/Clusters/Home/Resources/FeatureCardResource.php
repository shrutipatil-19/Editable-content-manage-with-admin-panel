<?php

namespace App\Filament\Clusters\Home\Resources;

use App\Filament\Clusters\Home;
use App\Filament\Clusters\Home\Resources\FeatureCardResource\Pages;
use App\Filament\Clusters\Home\Resources\FeatureCardResource\RelationManagers;
use App\Models\FeatureCard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeatureCardResource extends Resource
{
    protected static ?string $model = FeatureCard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = Home::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('icon')
                    ->maxLength(255),
                Forms\Components\TextInput::make('FeatureCardHeading')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('FeatureCardDescription')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('FeatureCardHeading')
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
            'index' => Pages\ListFeatureCards::route('/'),
            'create' => Pages\CreateFeatureCard::route('/create'),
            'edit' => Pages\EditFeatureCard::route('/{record}/edit'),
        ];
    }
}
