<?php

namespace Domain;

use Illuminate\Support\Facades\Http;

class BaseAction
{
    protected array $data = [];

    public function fromData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    public function token()
    {
        $data = [
            'scope' => '*',
            'grant_type' => 'password',
            'client_id' => env('CLIENT_ID'),
            'client_secret' => env('CLIENT_SECRET'),
            'username' => 'johndoe@gmail.com',
            'password'=> 'testpass',
        ];

        $login = Http::post(config('app.base_url'), $data);

        return json_decode($login)->access_token;
    }
}
