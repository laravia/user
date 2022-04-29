<?php

namespace Laravia\User\App\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    // protected function loadSeedsFrom($path, $namespace = "")
    // {
    //     $this->callAfterResolving(DatabaseSeeder::class, function ($seeder) use ($path, $namespace) {
    //         foreach (File::allFiles($path) as $filename) {

    //             if (!$namespace) {
    //                 $namespace = 'Laravia\Core\\Database\\Seeders\\';
    //             }
    //             $class = $namespace . $filename->getFilenameWithoutExtension();

    //             $seeder->call($class);
    //             $info = $class . " was successfully seeded";
    //             $output = new ConsoleOutput();
    //             $output->writeln("<info>" . $info . "</info>");
    //         }
    //     });
    // }

    public function register()
    {
        // dd('TEST');
    }

    // public function setMacros()
    // {
    //     Str::macro('parsedown', function ($text = "") {
    //         return app(Parser::class)->text($text)->render();
    //     });
    // }

    public function boot()
    {
        // dd('TEST');
    }
    //     $this->loadViewsFrom(Laravia::path()->get('core') . '/resources/views', 'laravia');
    //     $this->loadTranslationsFrom(Laravia::path()->get('core') . '/resources/lang', 'laravia');
    //     $this->loadMigrationsFrom(Laravia::path()->get('core') . '/database/migrations');
    //     $this->loadSeedsFrom(Laravia::path()->get('core') . '/database/seeders');

    //     App::booted(function () {
    //         $path = Laravia::path()->get('core') . '/routes/web.php';
    //         $this->loadRoutesFrom($path);
    //     });

    //     foreach (Laravia::commands() as $command) {
    //         $this->commands($command);
    //     }
    // }
}
