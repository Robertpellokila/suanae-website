<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IdmResource\Pages;
use App\Filament\Resources\IdmResource\RelationManagers;
use App\Models\Idm;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IdmResource extends Resource
{
    protected static ?string $model = Idm::class;

    protected static ?string $navigationIcon = 'heroicon-o-percent-badge';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Data IDM Pertahun')->schema([
                        Grid::make()->schema([
                            TextInput::make('tahun')
                                ->label('Tahun')
                                ->required(),
                            TextInput::make('skor')
                                ->label('Skor IDM')
                                ->required(),
                        ]),
                        Toggle::make('is_active')
                            ->required()
                            ->default(true)
                    ])
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Data IDM Desa')->schema([
                        Grid::make()->schema([
                            TextInput::make('status')
                                ->label('Status IDM')
                                ->required(),
                            TextInput::make('target')
                                ->label('Target Status IDM Desa')
                                ->required(),
                        ]),
                        Grid::make()->schema([
                            TextInput::make('skor_iks')
                                ->label('Skor IKS')
                                ->required(),
                            TextInput::make('skor_ike')
                                ->label('Skor IKE')
                                ->required(),
                            TextInput::make('skor_ikl')
                                ->label('Skor IKL')
                                ->required(),
                            TextInput::make('minimal')
                                ->label('Minimal IDM Tahun ini')
                                ->required(),
                            TextInput::make('penambahan')
                                ->label('Jumlah Penambahan Tahun ini')
                                ->required(),
                        ]),
                    ])
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Data PPID dan APBD')->schema([
                        TextInput::make('apbd')
                            ->label('APBD Desa')
                            ->required()
                            ->numeric()
                            ->required()
                            ->prefix('IDR'),
                        Grid::make()->schema([
                            FileUpload::make('dasar_hukum')
                                ->label('File Dasar Hukum')
                                ->required()
                                ->disk('public')
                                ->directory('pdf')
                                ->preserveFilenames()
                                ->columnSpanFull()
                                ->acceptedFileTypes(['application/pdf'])
                                ->maxSize(2048),
                            FileUpload::make('file_apbd')
                                ->label('File APBD Desa')
                                ->required()
                                ->disk('public')
                                ->directory('pdf')
                                ->preserveFilenames()
                                ->columnSpanFull()
                                ->acceptedFileTypes(['application/pdf'])
                                ->maxSize(2048),

                        ])
                    ])
                ])->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun')
                    ->label('Tahun Data IDM'),
                TextColumn::make('skor')
                    ->label('Skor IDM'),
                TextColumn::make('status')
                    ->label('Status IDM'),
                IconColumn::make('is_active')
                    ->boolean(),
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
        return 'Data IDM, PPID dan APBD';
    }

    public static function getModelLabel(): string
    {
        return 'Data IDM, PPID dan APBD';
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
            'index' => Pages\ListIdms::route('/'),
            'create' => Pages\CreateIdm::route('/create'),
            'view' => Pages\ViewIdm::route('/{record}'),
            'edit' => Pages\EditIdm::route('/{record}/edit'),
        ];
    }
}
