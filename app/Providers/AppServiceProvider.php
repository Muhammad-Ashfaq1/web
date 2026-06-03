<?php

namespace App\Providers;

use App\Models\Department;
use App\Models\Enums\ProcurementEnums;
use App\Models\SwmOperations;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('common.header', function ($view) {
            $departmentsNav = collect();
            $swmOperationsNav = collect();
            $procurementTypes = ProcurementEnums::cases();

            try {
                $departmentsNav = Department::where('is_active', true)
                    ->orderBy('name')
                    ->get();

                $swmOperationsNav = SwmOperations::active()
                    ->latest('updated_at')
                    ->get();
            } catch (Throwable) {
                // Keep the public site usable if admin tables are not migrated yet.
            }

            $view->with(compact('departmentsNav', 'swmOperationsNav', 'procurementTypes'));
        });
    }
}
