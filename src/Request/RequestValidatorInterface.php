<?php declare(strict_types=1);

namespace Qlimix\Http\Request;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Request\Exception\InvalidHttpRequestException;

interface RequestValidatorInterface
{
    /**
     * @throws InvalidHttpRequestException
     */
    public function validate(ServerRequestInterface $request): void;
}
