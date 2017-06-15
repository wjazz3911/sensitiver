<?php

namespace Wjazz\Sensitiver;

use Illuminate\Support\ServiceProvider;
use Wjazz\Sensitiver\SensitiveWordsFilterService;

class SensitiveWordsFilterProvider extends ServiceProvider
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
        //使用bind绑定实例到接口以便依赖注入
        $this->app->singleton('Sensitive',function(){
            return new SensitiveWordsFilterService();
        });
    }
}
