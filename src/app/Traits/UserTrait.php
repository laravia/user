<?php

namespace Laravia\User\App\Traits;

use App\Models\User;

trait UserTrait
{

    protected function actingAsUser($name)
    {
        $user = User::where('name', '=', $name)->first();
        $this->actingAs($user);
    }
}
