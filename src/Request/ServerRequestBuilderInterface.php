<?php declare(strict_types=1);

namespace Qlimix\Http\Request;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Exception\HttpException;

interface ServerRequestBuilderInterface
{
    /**
     * @throws HttpException
     */
    public function build(
        array $server = null,
        array $query = null,
        array $body = null,
        array $cookies = null,
        array $files = null
    ): ServerRequestInterface;

    /**
     * @throws HttpException
     */
    public function buildFromGlobals(): ServerRequestInterface;
}
