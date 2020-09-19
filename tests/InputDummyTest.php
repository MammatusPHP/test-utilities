<?php

declare(strict_types=1);

namespace Mammatus\Tests\TestUtilities;

use Mammatus\TestUtilities\InputDummy;
use WyriHaximus\TestUtilities\TestCase;

final class InputDummyTest extends TestCase
{
    /**
     * @test
     */
    public function getters(): void
    {
        self::assertNull((new InputDummy())->getAttribute('key'));
        self::assertSame('nope', (new InputDummy())->getAttribute('key', 'nope'));

        self::assertSame([], (new InputDummy())->getData());
    }
}
