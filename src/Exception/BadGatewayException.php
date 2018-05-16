<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

final class BadGatewayException extends \Exception
{
    /**
     * @param string $message
     * @param \Throwable $previous
     */
    public function __construct(string $message = 'Bad gateway', \Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
