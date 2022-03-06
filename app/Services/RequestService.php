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

}
