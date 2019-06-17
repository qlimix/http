<?php declare(strict_types=1);

namespace Qlimix\Http\Response;

use Psr\Http\Message\ResponseInterface as PSRResponseInterface;

interface ResponseInterface
{
    /**
     * @param mixed[] $data
     * @param mixed[] $headers
     */
    public function createJsonResponse(array $data, int $status = 200, array $headers = []): PSRResponseInterface;
}
