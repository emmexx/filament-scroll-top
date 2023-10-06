<?php

namespace App\Filament\Resources\TestResource\Pages;

use App\Filament\Resources\TestResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Tests;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;

class CreateTest extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = TestResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Long text step')
                ->icon('heroicon-m-document-text')
                ->schema([
                        Placeholder::make('Condizioni contrattuali')
                         ->content(view('filament.pages.longtext')),

                         Toggle::make('condizioni generali')
                         ->accepted()
                         ->Label(__('Accettazione condizioni contrattuali generali'))
                         ->helperText(__('Per procedere è necessario aver letto ed approvato le suelencate condizioni contrattuali.')),

                         Toggle::make('clausole')
                         ->accepted()
                         ->Label(__('Ai sensi degli articoli 1341 e 1342 del codice civile le parti dichiarano di approvare specificamente le clausole contenute ai seguenti punti X, XI, XII, XIII, XIV e XV'))
                         ->helperText(__('Per procedere è necessario aver letto ed approvato le suelencate condizioni contrattuali.')),

                         Toggle::make('privacy')
                         ->accepted()
                         ->Label(__('Autorizzo il trattamento dei dati ai soli fini dell\'espletamento del servizio di adesione in base all’art. 13 del D. Lgs. 196/2003 e all’art. 13 GDPR 679/16.'))
                         ->helperText(__('Per procedere è necessario aver letto ed approvato le suelencate condizioni contrattuali.')),

                ]),

            Step::make('step with fields')
                ->icon('heroicon-m-document-text')
                ->schema([


                TextInput::make('name'),

                TextInput::make('surname'),

                TextInput::make('address'),

                TextInput::make('city'),

                TextInput::make('country'),

                Placeholder::make('Other long text')
                ->content('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),

                TextArea::make('comment')
                ->rows(10),

                TextArea::make('description')
                ->rows(10),

                ]),

        ];
    }
}
