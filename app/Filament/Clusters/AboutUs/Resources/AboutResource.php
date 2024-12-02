<?php

namespace App\Filament\Clusters\AboutUs\Resources;

use App\Filament\Clusters\AboutUs;
use App\Filament\Clusters\AboutUs\Resources\AboutResource\Pages;
use App\Filament\Clusters\AboutUs\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = AboutUs::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->required(),

            Forms\Components\FileUpload::make('image_url')
                ->label('Image')
                ->image()
                ->disk('public')
                ->nullable(),

            Forms\Components\Repeater::make('features')
                ->label('Features')
                ->schema([
                    Forms\Components\TextInput::make('feature')
                        ->label('Feature')
                        ->required()
                        ->maxLength(255),
                ])
                ->collapsible()
                ->createItemButtonLabel('Add Feature')
                ->defaultItems(1),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Title')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('description')->label('Description')->limit(50)->searchable(),
            Tables\Columns\ImageColumn::make('image_url')->label('Image')->disk('public')->width(100)->height(100),
            Tables\Columns\TextColumn::make('created_at')->label('Created At')->sortable(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
