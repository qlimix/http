<?php declare(strict_types=1);

namespace Qlimix\Http\Request;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Request\Exception\InvalidHttpRequestException;

interface FromPsrRequestTransformerInterface
{
    /**
     * @return static
     *
     * @throws InvalidHttpRequestException
     */
    public function createFromRequest(ServerRequestInterface $request);
}
