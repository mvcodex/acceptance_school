<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RequestService;
use App\Http\Requests\RequestValidation;
use App\Http\Requests\RequestGetValidation;
use Illuminate\Support\Facades\Validator;

class RequestController extends Controller
{

    public function __construct(RequestService $service)
    {
        $this->service = $service;
    }
    public function getRequests(Request $request){



        $validator = Validator::make($request->all(), [
            'initialDate' => 'required',
            'finalDate' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'error' => 'Please, inform the parameters'
            ], 403);
        }

        $query = $request->all();

        return $this->service->getRequests($query["initialDate"],$query["finalDate"]);

    }

    public function createRequest(Request $request){

        $data = $request->all();
        return $this->service->createRequest($data);

    }

    public function updateRequest($id, Request $request){

        $data = $request->all();

        $response = $this->service->updateRequest($id, $data);
        if($response == -1){
            return response()->json("Request not found", 404);
        }

        return response()->json("Request updated succesfully", 200);

    }

    public function deleteRequest($id){

        $this->service->deleteRequest($id);

        return response()->json("Request deleted succesfully", 200);

    }
}
