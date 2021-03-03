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

        $this->assertInstanceOf(RouteInterface::class, $route);
    }

    public function testGetRouteName()
    {
        $route = $this->getRoute();

        $this->assertEquals('', $route->getName());
    }

    public function testGetRouteCallback()
    {
        $route = $this->getRoute();

        $this->assertEquals(null, $route->getCallback());
    }

    public function testGetpath()
    {
        $route = $this->getRoute();

        $this->assertEquals('/', $route->getPath());
    }

    public function testGetpathwithtwoslash()
    {
        $route = $this->getRoute();

        $this->assertEquals('/', $route->getPath());
    }

    public function testSetPath()
    {
        $route = $this->getRoute();

        $route->setPath('/home');

        $this->assertEquals('/home', $route->getPath());
    }

    public function testSetName()
    {
        $route = $this->getRoute();

        $route->setName('Mamadou');

        $this->assertEquals('Mamadou', $route->getName());
    }

    public function testSetCallback()
    {
        $route = $this->getRoute();

        $route->setCallback(['HomeController', 'index']);

        $this->assertIsArray($route->getCallback());

        $this->assertEquals(['HomeController', 'index'], $route->getCallback());

    }
}
