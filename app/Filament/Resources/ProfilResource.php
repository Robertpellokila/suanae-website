<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilResource\Pages;
use App\Filament\Resources\ProfilResource\RelationManagers;
use App\Models\Profil;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static ?string $navigationGroup = 'Kelola Halaman Profil Desa';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Bagan Pemerintahan')->schema([
                        FileUpload::make('bagan')
                            ->label('Gambar Bagan Desa')
                            ->required()
                            ->disk('public')
                            ->directory('aparatur')
                            ->preserveFilenames()
                            ->columnSpanFull()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif']),
                    ])
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Visi dan Misi')->schema([
                        RichEditor::make('visi')
                            ->label('Visi')
                            ->required()
                            ->columnSpanFull(),
                        Repeater::make('misi')
                            ->label('Misi')
                            ->schema([
                                Textarea::make('deskripsi')
                                    ->label('Deskripsi Misi')
                                    ->required(),
                            ])
                            ->addable()
                            ->deletable()
                            ->default([])
                            ->columnSpanFull(),
                    ]),
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Sejarah Desa')->schema([
                        RichEditor::make('sejarah')
                            ->label('Tulis Sejarah Desa')
                            ->required()
                            ->columnSpanFull(),
                    ])
                ])->columnSpanFull(),
                Group::make()->schema([
                    Repeater::make('kepala_desa')
                        ->label('Daftar Kepala Desa')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Kepala Desa')
                                ->required(),

                            TextInput::make('jabatan')
                                ->label('Jabatan')
                                ->required(),

                            TextInput::make('masa')
                                ->label('Masa Jabatan')
                                ->required(),
                        ])
                        ->addable() // Menambah data baru
                        ->deletable() // Menghapus data
                        ->default([])
                        ->columnSpanFull(),
                ])->columnSpanFull(),
                Group::make()->schema([
                    Repeater::make('kejadian')
                        ->label('Daftar Sejarah Kejadian Baik dan Buruk')
                        ->schema([
                            TextInput::make('tahun')
                                ->label('Tahun Kejadian')
                                ->required(),
                            TextInput::make('kejadian_baik')
                                ->label('Kejadian Baik')
                                ->required(),
                            TextInput::make('kejadian_buruk')
                                ->label('Kejadian Buruk')
                                ->required(),
                        ])
                        ->addable() // Menambah data baru
                        ->deletable() // Menghapus data
                        ->default([])
                        ->columnSpanFull(),
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('Nomor')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->searchable(),
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
        return 'Halaman Profil';
    }

    public static function getModelLabel(): string
    {
        return 'Halaman Profil';
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
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
}