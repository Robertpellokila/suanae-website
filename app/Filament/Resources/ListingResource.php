<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListingResource\Pages;
use App\Filament\Resources\ListingResource\RelationManagers;
use App\Models\Listing;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ListingResource extends Resource
{
    protected static ?string $model = Listing::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Judul Pertama')->schema([
                        TextInput::make('title_satu')
                            ->label('Judul Pertama')
                            ->required(),
                        RichEditor::make('description_satu')
                            ->label('Deskripsi Pertama')
                            ->required(),
                        Repeater::make('data_satu')
                            ->label('Data Pariwisata')
                            ->schema([
                                TextInput::make('judul')
                                    ->label('Judul Pariwisata')
                                    ->required(),
                                Textarea::make('deskripsi')
                                    ->label('Deskripsi Pariwisata')
                                    ->required(),
                                FileUpload::make('gambar')
                                    ->label('Gambar Pariwisata')
                                    ->required(),
                            ])
                            ->addable()
                            ->deletable()
                            ->columnSpanFull(),
                    ]),
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Judul Kedua')->schema([
                        TextInput::make('title_dua')
                            ->label('Judul Pertama')
                            ->required(),
                        RichEditor::make('description_dua')
                            ->label('Deskripsi Pertama')
                            ->required(),
                        Repeater::make('data_dua')
                            ->label('Data Keunggulan Desa')
                            ->schema([
                                TextInput::make('judul')
                                    ->label('Judul Keunggulan')
                                    ->required(),
                                Textarea::make('deskripsi')
                                    ->label('Deskripsi Keunggulan')
                                    ->required(),
                                FileUpload::make('gambar')
                                    ->label('Gambar Keunggulan')
                                    ->required(),
                            ])
                            ->addable()
                            ->deletable()
                            ->columnSpanFull(),
                    ])
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_satu')
                    ->label('Pariwisata')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('title_dua')
                    ->label('Keunggulan')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('data_satu_gambar')
                    ->label('Gambar Pariwisata')
                    ->searchable(),

                ImageColumn::make('data_dua_gambar')
                    ->label('Gambar Keunggulan')
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPluralLabel(): string
    {
        return 'Halaman Listing';
    }

    public static function getModelLabel(): string
    {
        return 'Halaman Listing';
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
            'index' => Pages\ListListings::route('/'),
            'create' => Pages\CreateListing::route('/create'),
            'view' => Pages\ViewListing::route('/{record}'),
            'edit' => Pages\EditListing::route('/{record}/edit'),
        ];
    }
}
