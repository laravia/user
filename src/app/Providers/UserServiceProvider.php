<?php

namespace Laravia\User\App\Providers;

use Laravia\Core\App\Providers\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    protected $name = "user";

    public function boot()
    {
        $this->defaultBootMethod();
    }
}
