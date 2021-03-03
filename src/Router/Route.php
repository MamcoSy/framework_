<?php

declare ( strict_types = 1 );

namespace Hellium\Router;

class Route implements RouteInterface
{
    protected string $name;
    protected  ? array $callback;

    /**
     * @param string $name
     */
    public function __construct( string $name = '', ?array $callback = null )
    {
        $this->name     = $name;
        $this->callback = $callback;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCallback(): ?array
    {
        return $this->callback;
    }
}
