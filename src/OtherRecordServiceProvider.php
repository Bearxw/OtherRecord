<?php

namespace Bearxw\OtherRecord;

use Illuminate\Support\ServiceProvider;

class OtherRecordServiceProvider extends ServiceProvider
{


    protected $defer = true; // 延迟加载服务
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('otherrecord', function ($app) {
                     return new OtherRecord();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['otherrecord'];
    }
}
