<?php

namespace App\Providers;

use App\Http\Controllers\CustomerController;
use Illuminate\Support\ServiceProvider;
use Invoicer\Domain\Repository\CustomerRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CustomerRepositoryInterface::class,
        fn ($app) => new CustomerRepository($app['Doctrine\ORM\EntityManagerInterface']));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
