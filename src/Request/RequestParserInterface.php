<?php declare(strict_types=1);

namespace Qlimix\Http\Request;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Exception\HttpException;

interface RequestParserInterface
{
    /**
     * @return mixed[]
     *
     * @throws HttpException
     */
    public function parse(ServerRequestInterface $request): array;
}
