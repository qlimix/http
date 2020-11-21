<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

use Exception;
use Throwable;

class HttpException extends Exception
{
    private int $httpCode;

    public function __construct(int $httpCode, string $message = '', ?Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->httpCode = $httpCode;
    }

    public function getHttpCode(): int
    {
        return $this->httpCode;
    }
}
