<?php

namespace App\Services;

class NLPService
{
    public function process(string $text): string
    {
        // TODO: connect to local NLP model
        return "Processed: " . $text;
    }
}
