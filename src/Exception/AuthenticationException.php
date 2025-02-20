<?php

declare(strict_types=1);

namespace Auth0\SDK\Exception;

use Exception;
use Throwable;

/**
 * @codeCoverageIgnore
 */
class AuthenticationException extends Exception implements Auth0Exception
{
    /**
     * @var string
     */
    public const MSG_REQUIRES_GRANT_TYPE = 'A grant type must be specified for this request';

    public static function requiresGrantType(
        ?Throwable $previous = null,
    ): self {
        return new self(self::MSG_REQUIRES_GRANT_TYPE, 0, $previous);
    }
}
