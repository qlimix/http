<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

use Throwable;

final class InternalServerErrorException extends \Exception
{
    /**
     * @param Throwable $previous
     * @param string $message
     */
    public function __construct(Throwable $previous, string $message = 'Internal server error')
    {
        parent::__construct($message, 0, $previous);
    }
}
