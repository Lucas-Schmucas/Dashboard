<?php

namespace App\Filament\Widgets;

use App\Models\RankCall;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BookRankChart extends LineChartWidget
{
  protected static ?string $heading = 'Revenue Per Day';

  protected int | string | array $columnSpan = 'full';

  protected static ?int $sort = 3;

  protected function getData(): array
   {
       $data = Trend::query(RankCall::select('bestseller_rank', 'created_at'))
           ->between(
               start: now()->subDays(30),
               end: now(),
           )
           ->perDay();

       return [
           'datasets' => [
               [
                   'label' => 'Revenue ($)',
                   'data' => $data->map(fn (TrendValue $value) => $value->aggregate / 100),
               ],
           ],
           'labels' => $data->map(fn (TrendValue $value) => $value->date),
       ];
   }
}
