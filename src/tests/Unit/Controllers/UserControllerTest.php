<?php

namespace Laravia\User\Tests\Unit\Controllers;

use Laravia\User\App\Http\Controllers\UserController;
use Laravia\Core\App\Classes\TestCase as LaraviaTestCase;

class UserControllerTest extends LaraviaTestCase
{

    public function testLaraviaUserControllerExists()
    {
        $this->assertClassExist(UserController::class);
    }
}
