<?php

namespace App\Services;
use App\Models\Request;
use Illuminate\Support\Facades\DB;

class RequestService{
    public function getRequests($initialDate, $finalDate){


        $requests = Request::whereDate('dtCadastro', '>=', date($initialDate))->whereDate(
            'dtCadastro', '<=', date($finalDate))->groupBy(['idUniao','idAssociacao', 'idEntidade'])->get();


        return $requests;
    }

    public function deleteRequest($idRequest){

        DB::transaction(function() use($idRequest){

            Request::where('idInteressado', $idRequest)->delete();

        });

    }

    public function updateRequest($idRequest , $date){

        $request = Request::where('idInteressado', $idRequest)->get();

        if($request->isEmpty()){
            return -1;
        }

        DB::transaction(function() use($request, $date){

            $request->update($date);

        });
    }

    public function createRequest($date){

       $request = Request::create($date);
       return $request;

    }
}
