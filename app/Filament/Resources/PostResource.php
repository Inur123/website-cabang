<?php

namespace App\Filament\Resources;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text'; // Icon menu

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set, $state) => $set('slug', Str::slug($state))), // Automatically generate slug
                    Forms\Components\TextInput::make('slug')
                    ->required()
                    ->disabled(),

                    TinyEditor::make('content'),


                Forms\Components\FileUpload::make('thumbnail')
                    ->image() // Specify the field type as an image
                    ->disk('public') // Use the 'public' disk
                    ->directory('thumbnails') // Store images in the 'thumbnails' folder
                    ->visibility('public') // Make the uploaded file publicly accessible
                    ->nullable(),
                    Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),// Allow null values for the thumbnail field
                Forms\Components\DateTimePicker::make('published_at'),
                Forms\Components\Toggle::make('is_published')
                ->label('Published'),
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id()),
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->disk('public') // Gunakan disk 'public'
                    ->getStateUsing(fn ($record) => asset('storage/' . $record->thumbnail)),
                Tables\Columns\TextColumn::make('category.name')->label('Category'),
                Tables\Columns\TextColumn::make('is_published')
                    ->label('Published')
                    ->getStateUsing(fn ($record) => $record->is_published == 1 ? 'Publish' : 'No Publish')
                    ->color(fn ($record) => $record->is_published == 1 ? 'success' : 'danger'),
                Tables\Columns\TextColumn::make('published_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
