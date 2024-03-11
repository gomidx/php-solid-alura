<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Scorable;

class PointsCalculator
{
    public function getPoints(Scorable $content)
    {
        return $content->getScore();
    }
}
