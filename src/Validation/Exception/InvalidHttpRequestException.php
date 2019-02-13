<?php declare(strict_types=1);

namespace Qlimix\Http\Validation\Exception;

use Exception;
use Psr\Http\Message\ResponseInterface;

final class InvalidHttpRequestException extends Exception
{
    /** @var ResponseInterface */
    private $response;

    public function __construct(ResponseInterface $response)
    {
        parent::__construct();
        $this->response = $response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
