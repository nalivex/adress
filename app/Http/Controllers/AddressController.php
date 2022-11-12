<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __invoke(Request $request)
    {

        $cep = $request->cep; //recendo valor passado no input por request

        if((!empty($cep))){    //verificando se valor passado está vazio para fazer a pesquisa na api de dados.

            $cep = preg_replace("/[^0-9]/", "", $cep);

            $json = file_get_contents("http://viacep.com.br/ws/$cep/json/"); //passando a api como valor json

            $address= json_decode($json); //retornando os dados como json

            return view('address', compact('address')); //retornando a view enviando os dados necessários
        }

        return view('address'); //caso o cep tenha vindo com valor vazio retorna a view sem dados

    }
}

