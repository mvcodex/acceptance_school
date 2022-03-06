<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestService;

class RequestController extends Controller
{

    public function __construct(RequestService $service)
    {
        $this->service = $service;
    }
    public function getRequests(){

        return $this->service->getRequests(null, null);

    }

    public function createRequest(){

    }

    public function updateRequest(){

    }

    public function deleteRequest(){

    }
}
