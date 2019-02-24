<?php declare(strict_types=1);

namespace Qlimix\Http\Request;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Exception\HttpException;
use Qlimix\Http\Request\Exception\InvalidHttpRequestException;

interface RequestParserInterface
{
    /**
     * @throws InvalidHttpRequestException
     * @throws HttpException
     */
    public function parse(ServerRequestInterface $request): array;
}