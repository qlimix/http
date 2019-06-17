<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

use Throwable;

final class BadGatewayException extends HttpException
{
    public function __construct(string $message = 'Bad gateway', ?Throwable $previous = null)
    {
        parent::__construct(502, $message, $previous);
    }
}
