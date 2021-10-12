<?php

namespace lipfreitas;

use Guzzle\Http\Client;

class slackbot
{
    private $botToken;
    private $guzzle;
    private $guzzleHeaders;

    public function __construct($botToken)
    {
        $this->botToken = $botToken;
        $this->guzzleHeaders = [
            "headers" => [
                "User-Agent" => "lipfreitas-slackbot",
                "Authorization" => "Bearer " . $this->botToken
            ]
        ];
        $this->guzzle = new Client();

    }

    public function sendMessage($message)
    {
        $response = $this->guzzle->createRequest('POST', 'https://slack.com/api/chat.postMessage', [
            "body" => [
                "channel" => "#geral",
                "text" => "$message",
                "username" => "Felipe Test bot",
                "token" => $this->botToken,
            ]
        ]);
        return $response->get();
    }
}