<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenrouterAI\OpenrouterService;

class TestController extends Controller
{
    public function index(OpenrouterService $openrouterService)
    {
        dd($openrouterService->sendAiRequest('say hello from AI API'));
    }
}
