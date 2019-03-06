<?php declare(strict_types=1);

namespace Qlimix\Http\Response;

use Psr\Http\Message\ResponseInterface;

interface NoContentInterface
{
    public function noContent(): ResponseInterface;
}
