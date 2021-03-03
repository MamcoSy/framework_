<?php

declare ( strict_types = 1 );

namespace Hellium\Router;

class Route implements RouteInterface
{
    protected string $name;
    protected string $path;
    protected  ? array $callback;

    /**
     * @param string $name
     */
    public function __construct( string $path = '/', ?array $callback = null, string $name = '' )
    {
        $this
            ->setPath( $path )
            ->setCallback( $callback )
            ->setName( $name )
        ;
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

    /**
     * @return mixed
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param  string  $path
     * @return mixed
     */
    public function setPath( string $path ): self
    {
        $this->path = '/' . trim( $path, '/' );

        return $this;
    }

    /**
     * @param  string  $name
     * @return mixed
     */
    public function setName( string $name ): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param  array   $callback
     * @return mixed
     */
    public function setCallback( ?array $callback ): self
    {
        $this->callback = $callback;

        return $this;
    }
}
