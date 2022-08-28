<?php

namespace App\Http\Controllers;

use App\Http\Requests\caracteristicaRequest;
use App\Models\caracteristica;
use App\Models\marca;
use App\Models\tensao;
use Illuminate\Http\Request;

class CaracteristicaController extends Controller
{

    public function index()
     {


          $lista = caracteristica::get();
          $marcas = marca::get();
          $tensao = tensao::get();
  
          return view('caracteristicas', ["lista"=>$lista,"marcas"=>$marcas, "tensao"=>$tensao]);


          
     }

     //

    public function cadastrar(caracteristicaRequest $request)  {


        $dados = $request->all();
        caracteristica::create($dados);

        

        return redirect('caracteristicas');
    }

    //

    

    public function apagar($id)
    {

         caracteristica::where('id', $id)->delete();
         return redirect('/caracteristicas');
    }

    //

    public function edit($id){
         $dados = null;
         $dados = caracteristica::where("id",$id)->first();
        
         $lista = caracteristica::get();
         $marcas = marca::get();
         $tensao = tensao::get();

         return view('caracteristicasedit', ["dados" => $dados,"lista"=>$lista,"marcas"=>$marcas, "tensao"=>$tensao]);
         
    }

    //

    public function atualizar(Request $request){
         
        $dados = $request->all();
        caracteristica::find($dados["id"])->update($dados);
         return redirect('/caracteristicas');
              
    }
}






