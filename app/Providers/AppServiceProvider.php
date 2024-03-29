<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\SingleOption;
use App\Models\Transaction;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (DB::connection() instanceof \Illuminate\Database\SQLiteConnection) {
            DB::statement(DB::raw('PRAGMA foreign_keys=1'));
        }

        Paginator::useBootstrap();

        view()->composer('*', function () {

            $dashboardData = [
                'sale_chart' => [
                    'today_sale' => Transaction::getTodaySaleAmount(),
                    'whole_sale' => Transaction::getWholeSaleAmount(),
                    'weekly_sale' => Transaction::getLastWeekSaleAmount(),
                    'service_avg_price' => Service::getServiceAmountAverage(),
                    'six_month_sale' => '[' .collect([10, 50, 20, 70, 20, 35])->implode(',') . ']'
                ]
            ];
            view()->share('dashboardData', $dashboardData);

            view()->share('site_options', SingleOption::getAllOptions());

        });



    }
}
