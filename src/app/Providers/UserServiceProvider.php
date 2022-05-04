<?php

namespace Laravia\User\App\Providers;

use Illuminate\Support\Facades\App;
use Laravia\Core\App\Laravia;
use Laravia\Core\App\Providers\LaraviaServiceProvider;

class UserServiceProvider extends LaraviaServiceProvider
{
    protected $name = 'user';

    public function boot()
    {
        $this->loadViewsFrom(Laravia::path()->get($this->name) . '/resources/views', $this->getPackagePrefix());
        $this->loadMigrationsFrom(Laravia::path()->get($this->name) . '/database/migrations');
        $this->loadSeedsFrom(Laravia::path()->get($this->name) . '/database/seeders', 'Laravia\\User\\Database\\Seeders\\');
        $this->mergeConfigFrom(Laravia::path()->get($this->name) . '/config/user.php', $this->getPackagePrefix());

        App::booted(function () {
            $path = Laravia::path()->get($this->name) . '/routes/web.php';
            $this->loadRoutesFrom($path);
        });
    }
}
