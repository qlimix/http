<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

use Throwable;

final class UnauthorizedException extends HttpException
{
    public function __construct(string $message = 'Unauthorized', Throwable $previous = null)
    {
        parent::__construct(401, $message, $previous);
    }
}
