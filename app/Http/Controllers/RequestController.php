<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Http\Requests\RequestValidation;
use App\Http\Requests\RequestGetValidation;

class RequestController extends Controller
{

    public function __construct(RequestService $service)
    {
        $this->service = $service;
    }
    public function getRequests(RequestGetValidation $request){
        
        $query = $request->all();
        
        return $this->service->getRequests($query["initialDate"],$query["finalDate"]);

    }

    public function createRequest(){

    }

    public function updateRequest(){

    }

    public function deleteRequest($id){
        
        $this->service->deleteRequest($id);

        return response()->json("Request deleted succesfully", 200);

    }
}
