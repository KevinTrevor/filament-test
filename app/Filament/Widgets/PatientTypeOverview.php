<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Patient::where('type', 'cat')->count()),
            Stat::make('Dogs', Patient::where('type', 'dog')->count()),
            Stat::make('Rabbits', Patient::where('type', 'rabbit')->count()),
            Stat::make('Iguanas', Patient::where('type', 'iguana')->count()),
        ];
    }
}
