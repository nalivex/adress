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

            $url = "http://viacep.com.br/ws/$cep/xml/";

            $address = simplexml_load_file($url);

            return view('address', compact('address'));
        }
        return view('address');

    }
}

