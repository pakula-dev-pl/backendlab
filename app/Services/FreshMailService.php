<?php

namespace App\Services;

use App\Models\Client;
use FreshMail\RestApi;

class FreshMailService
{

    private RestApi $restAPI;

    public function __construct()
    {
        $token = config("freshmail.token");
        $this->restAPI = new RestApi();
        $this->restAPI->setToken($token);
    }

    public function addClientToList(Client $client)
    {
        $this->restAPI->doRequest("",$client);
    }


}
