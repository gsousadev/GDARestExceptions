<?php

namespace Alvo\Exceptions\Config;

class BuildExceptions extends \Exception
{
    protected $exception;
    protected $message;

    public function __construct(BaseException $exception)
    {
        $this->exception = $exception;
        $this->message   = $exception->getMessageForHumans();
        $this->code      = $exception->getHttpCode();
        parent::__construct();
    }

    public function render()
    {
        return response()->json($this->exception->toArray(), $this->exception->getHttpCode() ?? 500);
    }
}
