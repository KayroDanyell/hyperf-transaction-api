<?php

namespace App\Exception;

use Swoole\Http\Status;
use Throwable;

class MerchantCannotTransferException extends \Exception
{
    const CODE = Status::UNAUTHORIZED;
    const DEFAULT_MESSAGE = "Merchants cannot transfer!";

    public function __construct($message = self::DEFAULT_MESSAGE, $code = self::CODE, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function getDefaultMessage(): string
    {
        return self::DEFAULT_MESSAGE;
    }
}