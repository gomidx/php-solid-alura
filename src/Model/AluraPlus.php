<?php

namespace Alura\Solid\Model;

class AluraPlus extends Video implements Scorable, Watchable
{
    private $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }

    public function getScore(): int
    {
        return $this->durationTime() * 2;
    }
}
