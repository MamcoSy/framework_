<?php

declare (strict_types = 1);

namespace Hellium\Router;

class Route implements RouteInterface
{
    protected string $name;
    protected string $path;
    protected  ? array $callback;

    /**
     * @param string $name
     */
    public function __construct(string $path = '/', ?array $callback = null, string $name = '')
    {
        $this->name     = $name;
        $this->path     = '/' . trim($path, '/');
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

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setCallback(array $callback): self
    {
        $this->callback = $callback;

        return $this;
    }
}
