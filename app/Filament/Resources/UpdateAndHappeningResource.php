<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UpdateAndHappeningResource\Pages;
use App\Filament\Resources\UpdateAndHappeningResource\RelationManagers;
use App\Models\UpdateAndHappening;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UpdateAndHappeningResource extends Resource
{
    protected static ?string $model = UpdateAndHappening::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('date'),
                        TextInput::make('event'),
                        TextInput::make('read_more'),
                        SpatieMediaLibraryFileUpload::make('event_image')->collection('event_images')
                            ->multiple()
                            ->enableReordering(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('event')
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUpdateAndHappenings::route('/'),
            'create' => Pages\CreateUpdateAndHappening::route('/create'),
            'edit' => Pages\EditUpdateAndHappening::route('/{record}/edit'),
        ];
    }
}
