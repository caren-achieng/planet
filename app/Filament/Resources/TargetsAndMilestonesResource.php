<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TargetsAndMilestonesResource\Pages;
use App\Filament\Resources\TargetsAndMilestonesResource\RelationManagers;
use App\Models\TargetsAndMilestones;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TargetsAndMilestonesResource extends Resource
{
    protected static ?string $model = TargetsAndMilestones::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('goal')
                        ->required(),
                        TextInput::make('goal_description')
                        ->required(),
                        SpatieMediaLibraryFileUpload::make('target')->collection('targets')
                            ->multiple()
                            ->enableReordering(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('goal')

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
            'index' => Pages\ListTargetsAndMilestones::route('/'),
            'create' => Pages\CreateTargetsAndMilestones::route('/create'),
            'edit' => Pages\EditTargetsAndMilestones::route('/{record}/edit'),
        ];
    }
}
