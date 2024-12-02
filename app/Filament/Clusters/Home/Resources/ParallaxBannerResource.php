<?php

namespace App\Filament\Clusters\Home\Resources;

use App\Filament\Clusters\Home;
use App\Filament\Clusters\Home\Resources\ParallaxBannerResource\Pages;
use App\Filament\Clusters\Home\Resources\ParallaxBannerResource\RelationManagers;
use App\Models\ParallaxBanner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParallaxBannerResource extends Resource
{
    protected static ?string $model = ParallaxBanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = Home::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('parallax_image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('parallax_heading')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parallax_btn_text')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('parallax_btn_link')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('parallax_image'),
                Tables\Columns\TextColumn::make('parallax_heading')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parallax_btn_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parallax_btn_link')
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
            'index' => Pages\ListParallaxBanners::route('/'),
            'create' => Pages\CreateParallaxBanner::route('/create'),
            'edit' => Pages\EditParallaxBanner::route('/{record}/edit'),
        ];
    }
}
