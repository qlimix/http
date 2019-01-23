<?php declare(strict_types=1);

namespace Qlimix\Http\Exception;

final class BadRequestException extends HttpException
{
    public function __construct()
    {
        parent::__construct(400, 'Bad Request');
    }
}
