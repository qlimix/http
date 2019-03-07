<?php declare(strict_types=1);

namespace Qlimix\Http\Response;

use Psr\Http\Message\ResponseInterface;
use Qlimix\Http\Response\Exception\ResponseBuilderException;

interface ResponseBuilderInterface
{
    /**
     * @param mixed $response
     *
     * @throws ResponseBuilderException
     */
    public function build($response): ResponseInterface;
}
