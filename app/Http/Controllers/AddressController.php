<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __invoke(Request $request)
    {

        $cep = $request->cep;

        if((!empty($cep))){

            $cep = preg_replace("/[^0-9]/", "", $cep);

            $json = file_get_contents("http://viacep.com.br/ws/$cep/json/");

            $address= json_decode($json);

            return view('address', compact('address'));
        }
        return view('address');

    }
}

