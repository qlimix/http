<?php declare(strict_types=1);

namespace Qlimix\Http\Response\Exception;

use Exception;
use Throwable;

final class ResponseBuilderException extends Exception
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct($previous);
    }
}
