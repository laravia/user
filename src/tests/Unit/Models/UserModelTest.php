<?php

namespace Laravia\User\Tests\Unit\Models;

use App\Models\User as LaravelUser;
use Laravia\User\App\Models\User;
use Laravia\Core\App\Classes\TestCase as LaraviaTestCase;

class UserModelTest extends LaraviaTestCase
{

    public function testLaravelDefaultModelClassExists()
    {
        $this->assertClassExist(LaravelUser::class);
    }

    public function testLaraviaUserModelExists()
    {
        $this->assertClassExist(User::class);
    }
}
