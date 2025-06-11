<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\NLPService;

class ExampleController extends Controller
{
    public function hello(Request $request, NLPService $nlp)
    {
        $text = $request->query('text', 'world');
        $processed = $nlp->process($text);
        return response()->json(['message' => $processed]);
    }
}
