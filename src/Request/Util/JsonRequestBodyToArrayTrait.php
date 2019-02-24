<?php declare(strict_types=1);

namespace Qlimix\Http\Request\Util;

use Psr\Http\Message\RequestInterface;

trait JsonRequestBodyToArrayTrait
{
    private function jsonToArray(RequestInterface $request): array
    {
        $params = json_decode($request->getBody()->getContents(), true);
        return !is_array($params) ? [] : $params;
    }
}
