<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KadesResource\Pages;
use App\Filament\Resources\KadesResource\RelationManagers;
use App\Models\Kades;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TiptapEditor;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KadesResource extends Resource
{
    protected static ?string $model = Kades::class;

    protected static ?string $navigationGroup = 'Kelola Halaman Beranda';


    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Data Kades';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->columnSpanFull(),
                RichEditor::make('sambutan')
                    ->label('Sambutan')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->required()
                    ->disk('public')
                    ->directory('home')
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
                    ->searchable()
                    ->sortable(),
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
        return 'Data Kades';
    }

    public static function getModelLabel(): string
    {
        return 'Data Kades';
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
            'index' => Pages\ListKades::route('/'),
            'create' => Pages\CreateKades::route('/create'),
            'edit' => Pages\EditKades::route('/{record}/edit'),
        ];
    }
}