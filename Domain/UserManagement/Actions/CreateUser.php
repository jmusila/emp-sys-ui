<?php

namespace Domain\UserManagement\Actions;

use Domain\UserManagement\DataTransferObjects\UserData;
use Domain\BaseAction;
use Illuminate\Support\Facades\Http;

class CreateUser extends BaseAction
{
    public function execute()
    {
        $data = UserData::fromArray($this->data);
        $token = $this->token();

        $user = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post(config('app.base_url') . '/users', $data);

        return $user;
    }
}
