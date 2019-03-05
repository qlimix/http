<?php declare(strict_types=1);

namespace Qlimix\Http\Response;

use Psr\Http\Message\ResponseInterface;
use Qlimix\Http\Exception\HttpException;

interface ResponseEmitterInterface
{
    /**
     * @throws HttpException
     */
    public function emit(ResponseInterface $response): void;
}
