<?php

namespace App\Service;

class Hello
{
    protected $subject;

    public function __construct(string $subject)
    {
        $this->subject = $subject;
    }

    public function greet()
    {
        return "Hello {$this->subject}!";
    }
}
