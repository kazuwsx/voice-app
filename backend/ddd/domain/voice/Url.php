<?php

namespace Ddd\Domain\Voice;

use Exception;

final class Url{

    private $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public function get_url(): string
    {
        return $this->value;
    }
}
