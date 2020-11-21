<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

final class BadRequestException extends HttpException
{
    /** @var mixed[] */
    private array $response;

    /**
     * @param mixed[] $response
     */
    public function __construct(array $response, string $message = 'Bad Request')
    {
        parent::__construct(400, $message);
        $this->response = $response;
    }

    /**
     * @return mixed[]
     */
    public function getResponse(): array
    {
        return $this->response;
    }
}
