<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfografisResource\Pages;
use App\Filament\Resources\InfografisResource\RelationManagers;
use App\Models\Infografis;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfografisResource extends Resource
{
    protected static ?string $model = Infografis::class;

    protected static ?string $navigationGroup = 'Kelola Halaman Infografis';


    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Data Masyarakat')->schema([
                        TextInput::make('jumlah_dusun')
                            ->label('Jumlah Dusun')
                            ->type('number')
                            ->required(),
                        TextInput::make('jumlah_rt')
                            ->label('Jumlah RT / RW')
                            ->type('number')
                            ->required(),
                        TextInput::make('jumlah_kk')
                            ->label('Jumlah Kepala Keluarga')
                            ->type('number')
                            ->required(),
                    ])
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jumlah_dusun')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jumlah_rt')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jumlah_kk')
                    ->sortable()
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
        return 'Data Infografis';
    }

    public static function getModelLabel(): string
    {
        return 'Data Infografis';
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
            'index' => Pages\ListInfografis::route('/'),
            'create' => Pages\CreateInfografis::route('/create'),
            'edit' => Pages\EditInfografis::route('/{record}/edit'),
        ];
    }
}