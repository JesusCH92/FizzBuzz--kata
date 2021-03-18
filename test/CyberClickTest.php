<?php

declare(strict_types=1);

namespace Test;

use App\CyberClick;
use PHPUnit\Framework\TestCase;

class CyberClickTest extends TestCase
{
    /**
     * @test
     */
    public function returnNumberTwo()
    {
        $message = new CyberClick();
        $this->assertEquals(2, $message(2));
    }

    /**
     * @test
     */
    public function returnCyberMessage()
    {
        $message = new CyberClick();
        $this->assertEquals('cyber', $message(3));
    }

    /**
     * @test
     */
    public function returnClickMessage()
    {
        $message = new CyberClick();
        $this->assertEquals('click', $message(5));
    }

    /**
     * @test
     */
    public function returnCyberClickMessage()
    {
        $message = new CyberClick();
        $this->assertEquals('cyberclick', $message(15));
    }
}