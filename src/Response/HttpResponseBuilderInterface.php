<?php declare(strict_types=1);

namespace Qlimix\Http\Response;

use Psr\Http\Message\ResponseInterface;
use Qlimix\Http\Response\Exception\HttpResponseBuilderException;

interface HttpResponseBuilderInterface
{
    /**
     * @param mixed $data
     *
     * @throws HttpResponseBuilderException
     */
    public function build($data): ResponseInterface;
}
