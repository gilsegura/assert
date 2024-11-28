<?php

declare(strict_types=1);

namespace ProxyAssert;

use Assert\Assertion as BaseAssertion;
use ProxyAssert\Exception\AssertionFailedException;

final class Assertion extends BaseAssertion
{
    protected static $exceptionClass = AssertionFailedException::class;
}
