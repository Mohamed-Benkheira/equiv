<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\BacRequest;


class BacStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [

            // Bac Requests Stats
            Stat::make('Total Bac Requests', BacRequest::count())
                ->description('All Bac Requests')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),

            Stat::make('Pending Bac Requests', BacRequest::where('status', 'pending')->count())
                ->description('Awaiting Approval')
                ->descriptionIcon('heroicon-o-clock')
                ->color('warning'),

            Stat::make('Approved Bac Requests', BacRequest::where('status', 'accepted')->count())
                ->description('Approved Requests')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

        ];
    }
}
