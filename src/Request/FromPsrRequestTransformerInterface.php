<?php declare(strict_types=1);

namespace Qlimix\Http\Request;

use Psr\Http\Message\ServerRequestInterface;

interface FromPsrRequestTransformerInterface
{
    /**
     * @return static
     */
    public function createFromRequest(ServerRequestInterface $request);
}
