<?php

declare(strict_types=1);

namespace ProxyAssert\Tests;

use ProxyAssert\Assertion;
use PHPUnit\Framework\TestCase;
use ProxyAssert\Exception\AssertionFailedException;

final class AssertionTest extends TestCase
{
    public function test_must_throw_an_exception(): void
    {
        self::expectException(AssertionFailedException::class);

        Assertion::string(1);
    }
}
