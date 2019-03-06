<?php declare(strict_types=1);

namespace Qlimix\Http\Response;

use Psr\Http\Message\ResponseInterface;

interface JsonResponseInterface
{
    public function createJsonResponse(array $data, int $status = 200, array $headers = []): ResponseInterface;
}
