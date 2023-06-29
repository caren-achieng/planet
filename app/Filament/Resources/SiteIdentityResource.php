<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteIdentityResource\Pages;
use App\Filament\Resources\SiteIdentityResource\RelationManagers;
use App\Models\SiteIdentity;
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
use Spatie\LaravelIgnition\Support\SentReports;

class SiteIdentityResource extends Resource
{
    protected static ?string $model = SiteIdentity::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('site_name'),
                        TextInput::make('tagline'),
                        RichEditor::make('description'),
                        TextInput::make('call_to_action'),
                        SpatieMediaLibraryFileUpload::make('carousel')->collection('carousels')
                        ->multiple()
                        ->enableReordering(),
                    ])->columns(2),

                Card::make()
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('logo')->collection('logo')
                            ->enableReordering(),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('site_name')
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
            'index' => Pages\ListSiteIdentities::route('/'),
            'create' => Pages\CreateSiteIdentity::route('/create'),
            'edit' => Pages\EditSiteIdentity::route('/{record}/edit'),
        ];
    }
}
