<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Define your form fields if needed
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Define columns to display data from the Contact model
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Phone'),

                TextColumn::make('message')
                    ->label('Message')
                    ->limit(50), // Limit the message length to 50 characters

                TextColumn::make('created_at')
                    ->label('Received At')
                    ->dateTime('d-m-Y H:i') // Format the date as needed
                    ->sortable(),
            ])
            ->filters([
                // You can add any filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Optionally, add more actions like view or delete
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
