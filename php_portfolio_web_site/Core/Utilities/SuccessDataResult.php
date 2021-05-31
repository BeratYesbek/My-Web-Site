<?php

class SuccessDataResult extends DataResult
{
    public function __construct(object $data, string $message)
    {
        parent::__construct($data, $message, true);
    }
}