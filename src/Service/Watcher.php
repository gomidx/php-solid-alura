<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Watchable;

class Watcher
{
    public function watch(Watchable $content): void
    {
        $content->watch();
    }
}
