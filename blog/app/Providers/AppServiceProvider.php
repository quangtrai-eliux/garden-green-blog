<?php

namespace App\Providers;

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
        $this->app->singleton(

            \App\Repositories\Adv\AdvRepositoryInterface::class,
            \App\Repositories\Adv\AdvRepository::class,

            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryRepository::class,

            \App\Repositories\Comment\CommentRepositoryInterface::class,
            \App\Repositories\Comment\CommentRepository::class,

            \App\Repositories\Post\PostRepositoryInterface::class,
            \App\Repositories\Post\PostRepository::class,

            \App\Repositories\PostTag\PostTagRepositoryInterface::class,
            \App\Repositories\PostTag\PostTagRepository::class,

            \App\Repositories\PostType\PostTypeRepositoryInterface::class,
            \App\Repositories\PostType\PostTypeRepository::class,

            \App\Repositories\Tag\TagRepositoryInterface::class,
            \App\Repositories\Tag\TagRepository::class,
            
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserRepository::class
        );
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
