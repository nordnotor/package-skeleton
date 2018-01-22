<?php

namespace App\Skeleton\Tests;

use App\Skeleton\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function testGoBool()
    {
        $this->assertTrue(Project::start());
    }
}
