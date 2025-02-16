<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AparaturResource\Pages;
use App\Filament\Resources\AparaturResource\RelationManagers;
use App\Models\Aparatur;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AparaturResource extends Resource
{
    protected static ?string $model = Aparatur::class;

    protected static ?string $navigationGroup = 'Kelola Aparatur Desa';


    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required(),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->required()
                    ->disk('public')
                    ->directory('aparatur')
                    ->preserveFilenames()
                    ->columnSpanFull()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                ->label('Gambar')
                    ->sortable(),
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

    public static function getPluralLabel(): string
    {
        return 'Aparatur Desa';
    }

    public static function getModelLabel(): string
    {
        return 'Aparatur Desa';
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
            'index' => Pages\ListAparaturs::route('/'),
            'create' => Pages\CreateAparatur::route('/create'),
            'edit' => Pages\EditAparatur::route('/{record}/edit'),
        ];
    }
}