<?php

namespace Laravia\User\Tests\Unit\Controllers;

use Laravia\User\App\Http\Controllers\DashboardController;
use Laravia\Core\App\Classes\TestCase as LaraviaTestCase;

class DashboardControllerTest extends LaraviaTestCase
{

    public function testLaraviaUserControllerExists()
    {
        $this->assertClassExist(DashboardController::class);
    }
}
