<?php

namespace Laravia\User\Tests\Unit;

use Laravia\Core\App\Classes\TestCase as LaraviaTestCase;
use Laravia\Core\App\Laravia;

class UserTest extends LaraviaTestCase
{

    public function testRouteFile()
    {
        $this->assertFileExists(Laravia::path()->get('user')."/routes/web.php");
    }
}
