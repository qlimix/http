<?php declare(strict_types=1);

namespace Qlimix\Http\Request;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Exception\HttpException;

interface RequestTransformerInterface
{
    /**
     * @return mixed
     *
     * @throws HttpException
     */
    public function transform(ServerRequestInterface $request);
}
