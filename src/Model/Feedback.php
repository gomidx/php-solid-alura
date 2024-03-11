<?php

namespace Alura\Solid\Model;

class Feedback
{
    private $score;

    private $statement;

    public function __construct(int $score, ?string $statement)
    {
        if ($score < 9 && empty($statement)) {
            throw new \DomainException('Statement is required.');
        }

        $this->score = $score;
        $this->statement = $statement;
    }
}