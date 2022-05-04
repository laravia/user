<?php

use Laravia\Core\App\Laravia;

$config['user'] = [
    'links' => [
        ['name'=>'laravia.user::dashboard','text'=>Laravia::trans('user.siteTitleDashboard'),'auth'=>1,'sort'=>10],
    ],
];

return $config;
