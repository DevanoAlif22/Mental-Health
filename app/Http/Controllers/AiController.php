<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class AiController extends Controller
{
    function index() {
        return view('ai.index');
    }

    function result(Request $request) {
        $topic = $request->topic;
        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));

        $prompt = "Chat GPT ini saya pakai ai untuk aplikasi saya (pihak ketiga), jika inputan user keluar dari topik tentang kesehatan jawab saja 'Saya di program untuk menjelaskan topik tentang kesehatan'. Inputan User : " . $topic;
        $openAiOutput = $open_ai->completion([
            'engine' => 'davinci-instruct-beta-v3',
            'prompt' => $topic,
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
         ]);
        return view('ai.index',['result' => $openAiOutput]);
    }
}
