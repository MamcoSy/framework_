<?php

use Hellium\Router\Route;
use PHPUnit\Framework\TestCase;
use Hellium\Router\RouteInterface;

class RouteTest extends TestCase
{
    public function getRoute()
    {
        return new Route();
    }

    public function testNewRoute()
    {
        $route = $this->getRoute();

        $this->assertInstanceOf( RouteInterface::class, $route );
    }

    public function testGetRouteName()
    {
        $route = $this->getRoute();

        $this->assertEquals( '', $route->getName() );
    }

    public function testGetRouteCallback()
    {
        $route = $this->getRoute();

        $this->assertEquals( null, $route->getCallback() );
    }
}
