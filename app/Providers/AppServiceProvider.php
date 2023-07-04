<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Distributor;
use App\Models\Order;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Category\EloquentCategoryRepository;
use App\Repositories\Distributor\DistributorRepositoryInterface;
use App\Repositories\Distributor\EloquentDistributorRepository;
use App\Repositories\Order\EloquentOrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Product\EloquentProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Role\EloquentRoleRepository;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\EloquentUserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, function () {
            return new EloquentUserRepository(new User());
        });
        $this->app->bind(RoleRepositoryInterface::class, function () {
            return new EloquentRoleRepository(new Role());
        });
        $this->app->bind(DistributorRepositoryInterface::class, function () {
            return new EloquentDistributorRepository(new Distributor());
        });
        $this->app->bind(ProductRepositoryInterface::class, function () {
            return new EloquentProductRepository(new Product());
        });
        $this->app->bind(OrderRepositoryInterface::class, function () {
            return new EloquentOrderRepository(new Order());
        });
        $this->app->bind(CategoryRepositoryInterface::class, function () {
            return new EloquentCategoryRepository(new Category());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
