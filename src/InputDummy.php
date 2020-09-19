<?php

declare(strict_types=1);

namespace Mammatus\TestUtilities;

use Chimera\Input;

final class InputDummy implements Input
{
    /**
     * @param mixed|null $default
     *
     * @return mixed|null
     *
     * @phpstan-ignore-next-line
     */
    public function getAttribute(string $name, $default = null)
    {
        return $default;
    }

    /**
     * @return mixed[]
     */
    public function getData(): array
    {
        return [];
    }
}
