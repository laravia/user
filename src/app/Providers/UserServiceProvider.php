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
        $this->loadViewsFrom(Laravia::path()->get($this->name) . '/resources/views', $this->name);
        $this->loadTranslationsFrom(Laravia::path()->get($this->name) . '/lang', $this->name);
        $this->loadMigrationsFrom(Laravia::path()->get($this->name) . '/database/migrations');
        $this->loadSeedsFrom(Laravia::path()->get($this->name) . '/database/seeders', 'Laravia\\User\\Database\\Seeders\\');

        App::booted(function () {
            $path = Laravia::path()->get($this->name) . '/routes/web.php';
            $this->loadRoutesFrom($path);
        });
    }
}
