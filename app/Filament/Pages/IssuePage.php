<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class IssuePage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.issue-page';

    public array $data = [];

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Working section')->schema([
                CheckboxList::make('works')->options([
                    'test1' => 'Test 1',
                    'test2' => 'Test 2',
                    'test3' => 'Test 3',
                ]),
            ]),
            Section::make('Not working section')->statePath('data')->schema([
                CheckboxList::make('not_working')->options([
                    'test1' => 'Test 1',
                    'test2' => 'Test 2',
                    'test3' => 'Test 3',
                ]),
            ])
        ]);
    }
}
