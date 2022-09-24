<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Invoicer\Domain\Repository\CustomerRepositoryInterface;
use Invoicer\Persistence\Doctrine\Repository\CustomerRepository;

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
