<?php declare(strict_types=1);

namespace Qlimix\Http\Response\Exception;

use Exception;
use Throwable;

final class ResponseBuilderException extends Exception
{
    public function __construct(string $message, ?Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
