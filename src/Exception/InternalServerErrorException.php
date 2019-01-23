<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

use Throwable;

final class InternalServerErrorException extends HttpException
{
    public function __construct(Throwable $previous, string $message = 'Internal server error')
    {
        parent::__construct(500, $message, $previous);
    }
}
