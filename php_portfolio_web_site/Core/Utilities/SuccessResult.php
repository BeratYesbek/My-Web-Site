<?

class SuccessResult extends Result
{

    public function __construct(string $message)
    {
        parent::__construct($message, true);
    }

}