<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Http\Requests\RequestValidation;

class RequestController extends Controller
{

    public function __construct(RequestService $service)
    {
        $this->service = $service;
    }
    public function getRequests(RequestValidation $request){
        
        $query = $request->all();
        
        return $this->service->getRequests($query["initialDate"],$query["finalDate"]);

    }

    public function createRequest(){

    }

    public function updateRequest(){

    }

    public function deleteRequest(){

    }
}
