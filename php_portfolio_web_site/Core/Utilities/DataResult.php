<?php

class DataResult extends Result implements IDataResult
{
    private object $data;

    public function __construct(object $data, string $message, bool $success)
    {
        $this->$data = $data;
        parent::__construct($message, $success);
    }

    function data(): object
    {
        return $this->data();
    }
}
