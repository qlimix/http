<?php declare(strict_types=1);

namespace Qlimix\Http\Validation;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Validation\Exception\InvalidHttpRequestException;

interface HttpRequestValidatorInterface
{
    /**
     * @throws InvalidHttpRequestException
     */
    public function validate(ServerRequestInterface $request): void;
}
