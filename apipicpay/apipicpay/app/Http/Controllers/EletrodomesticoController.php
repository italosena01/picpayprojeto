<?php

namespace App\Http\Controllers;

use App\Models\Eletrodomestico;
use Illuminate\Http\Request;

class EletrodomesticoController extends Controller
{
    public function index()
    {

        echo "pagina inicial";
    }

    public function listar()
    {


        $lista = Eletrodomestico::get();
        return response()->json(

            [
                "data" => [
                    "status" => true,
                    "message" => "success",
                    "data" => $lista

                ]

            ]
        );
    }

    public function cadastrar(Request $request)
    {

        $dados = $request->all();

        $dados = Eletrodomestico::create($dados);
        return response()->json([
            "data" => [
                "status" => true,
                "message" => "success",
                "data" => $dados
            ], 200
        ]);
    }


    public function atualizar(Request $request)
    {
        $dados = Eletrodomestico::find($request->id);
        if (!empty($request->nome)) {
            $dados->nome = $request->nome;
        }
        if (!empty($request->descricao)) {
            $dados->descricao = $request->descricao;
        }
        if (!empty($request->$request->marca_id)) {
            $dados->marca_id = $request->marca_id;
        }
        if (!empty($dados->tensao_id)) {
            $dados->tensao_id = $request->tensao_id;
        }

        $dados->save();
        return response()->json([
            "data" => [
                "status" => true,
                "message" => "success",
                "data" => $dados
            ], 200
        ]);
    }

    public function deletar(Request $request)
    {
        $dados = Eletrodomestico::find($request->id);
    
        $dados->delete();
        return response()->json([
            "data" => [
                "status" => true,
                "message" => "success",
                "data" => $dados
            ], 200
        ]);
    }






}
