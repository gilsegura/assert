<?php

declare(strict_types=1);

namespace ProxyAssert\Exception;

final class AssertionFailedException extends \InvalidArgumentException
{
    public function __construct(
        string $message = 'Invalid argument.',
        int $code = 400,
        public readonly ?string $propertyPath = null,
        public readonly mixed $value = null,
        public readonly array $constraints = [],
    ) {
        parent::__construct($message, $code);
    }
}
