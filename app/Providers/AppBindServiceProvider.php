<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppBindServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->_registerBindings();
    }

    /**
     * 用户表
     *
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017
     */
    private function _registerBindings()
    {
        $this->app->bind('App\Repositories\User\UserContract'
            , 'App\Repositories\User\UserRepository');//用户表
    }
}
