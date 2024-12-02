<?php

namespace App\Filament\Clusters\AboutUs\Resources;

use App\Filament\Clusters\AboutUs;
use App\Filament\Clusters\AboutUs\Resources\TeamResource\Pages;
use App\Filament\Clusters\AboutUs\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = AboutUs::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('image_url')
                ->label('Image URL')
                ->url()
                ->required(),
                
            Forms\Components\TextInput::make('facebook_url')
                ->label('Facebook URL')
                ->url()
                ->nullable(),

            Forms\Components\TextInput::make('instagram_url')
                ->label('Instagram URL')
                ->url()
                ->nullable(),

            Forms\Components\TextInput::make('twitter_url')
                ->label('Twitter URL')
                ->url()
                ->nullable(),

            Forms\Components\TextInput::make('linkedin_url')
                ->label('LinkedIn URL')
                ->url()
                ->nullable(),
        ]);
    }

    // Table columns for the admin panel
    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Name')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('title')
                ->label('Title')
                ->sortable(),

            Tables\Columns\ImageColumn::make('image_url')
                ->label('Image')
                ->sortable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->sortable(),
        ])
        ->filters([
            // Add any custom filters for the table if needed
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
