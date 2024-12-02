<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnquiryResource\Pages;
use App\Models\Enquiry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class EnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')   // Correct usage of TextColumn
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')  // Correct usage of TextColumn
                    ->label('Email')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('phone')  // Correct usage of TextColumn
                    ->label('Phone'),

                TextColumn::make('event_type') // Correct usage of TextColumn
                    ->label('Event Type')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('message')  // Correct usage of TextColumn
                    ->label('Message')
                    ->limit(50),

                TextColumn::make('created_at')  // Correct usage of TextColumn
                    ->label('Received At')
                    ->dateTime('d-m-Y H:i')
                    ->sortable(),
            ])
            ->filters([
                // You can add any filters if necessary
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEnquiries::route('/'),
            'create' => Pages\CreateEnquiry::route('/create'),
            'edit' => Pages\EditEnquiry::route('/{record}/edit'),
        ];
    }
}
