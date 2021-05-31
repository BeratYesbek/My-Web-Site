<?php

class ErrorDataResult extends DataResult {

    public function __construct(object $data, string $message)
    {
        parent::__construct($data, $message, false);
    }
}