<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\LicenseRequest;


class LicenseStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total License Requests', LicenseRequest::count())
                ->description('All License Requests')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),

            Stat::make('Pending License Requests', LicenseRequest::where('status', 'pending')->count())
                ->description('Awaiting Approval')
                ->descriptionIcon('heroicon-o-clock')
                ->color('warning'),

            Stat::make('Approved License Requests', LicenseRequest::where('status', 'accepted')->count())
                ->description('Approved Requests')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),


        ];
    }
}
