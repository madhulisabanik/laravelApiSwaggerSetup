<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResponse extends JsonResource
{
    public $response;

    public function __construct($response)
    {
        $this->response = $response;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'access_token' => $this->response->tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => $this->response->tokenResult->token->expires_at,
        ];
    }
}
