<?php
class Result implements IResult  {

    private string $message;
    private bool $success;

    public function __construct(string $message,bool $success){
        $this->message = $message;
        $this-> success = $success;
    }

    function Success(): bool
    {
        return $this->success;
    }

    function Message(): string
    {
        return $this->message;
    }
}