<?php declare(strict_types=1);

namespace Qlimix\Http\Response;

use Psr\Http\Message\ResponseInterface;
use Qlimix\Http\Response\Exception\HttpResponseBuilderException;

interface HttpResponseBuilderInterface
{
    /**
     * @param mixed $response
     *
     * @throws HttpResponseBuilderException
     */
    public function build($response): ResponseInterface;
}
