<?php

namespace App\Filament\Clusters\Events\Resources;

use App\Filament\Clusters\Events;
use App\Filament\Clusters\Events\Resources\PersonalEventsResource\Pages;
use App\Models\PersonalEvents;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PersonalEventsResource extends Resource
{
    protected static ?string $model = PersonalEvents::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Events Management'; // Adjust for grouping

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Event Title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('Event Description')
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->label('Event Image')
                    ->image()
                    ->directory('events')
                    ->required(),

                Select::make('status')
                    ->label('Event Type')
                    ->options([
                        'Personal' => 'Personal',
                        'Corporate' => 'Corporate', // Fixed typo from "Coorporate"
                        'Social' => 'Social',
                    ])
                    ->required(),

                Forms\Components\DatePicker::make('event_date')
                    ->label('Event Date') // Changed field label for clarity
                    ->default(now())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->limit(50),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),

                Tables\Columns\TextColumn::make('event_date')
                    ->label('Event Date')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('recent')
                    ->label('Recent Events')
                    ->query(fn (Builder $query) => $query->where('event_date', '>=', now()->subMonth())), // Use event_date for relevance
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relation managers if necessary
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonalEvents::route('/'),
            'create' => Pages\CreatePersonalEvents::route('/create'),
            'edit' => Pages\EditPersonalEvents::route('/{record}/edit'),
        ];
    }
}
