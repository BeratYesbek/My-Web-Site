<?php

class ErrorResult extends Result
{

    public function __construct(string $message, bool $success)
    {
        parent::__construct($message, false);
    }
}
