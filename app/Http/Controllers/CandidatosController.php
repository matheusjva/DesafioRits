<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Candidatos;

class CandidatosController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Candidatos $candidatos)
    {
        $validateData =
        Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'resumo' => 'string|max:255',
            'linkedin' => 'required|string|max:255',
            'github' => 'required|string|max:255',
            'ingles' => 'in:NENHUM,BASICO,INTERMEDIARIO,FLUENTE',
            'salario' => 'required|interger',

        ]);

        $candidatos->nome = $request->get('nome');
        $candidatos->email = $request->get('email');
        $candidatos->telefone = $request->get('telefone');
        $candidatos->resumo = $request->get('resumo');
        $candidatos->linkedin = $request->get('linkedin');
        $candidatos->github = $request->get('github');
        $candidatos->ingles = $request->get('ingles');
        $candidatos->salario = $request->get('salario');

        $file = $request->file('file');
        $typefile = $file->getClientMimeType();

        if ($request->hasFile('file') == true) {
            $name= time(). $file->getClientOriginalName();
            if ($file->move(base_path() . '/public/arquivos/', $name)){

                $candidatos->file = $name;
                $candidatos->save();

                return redirect('/')->with('status', 'Recebemos a sua candidatura, boa sorte!');
            }
            else
            {
                return redirect('/')->with('error', 'Erro ao mover arquivo!');

            }
        }
        else
        {
            return redirect('/')->with('error', 'Adicione um arquivo válido.');
        }

    }


    public function download($filename){
        $file = public_path()."/arquivos/$filename";
        $header = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, $filename, $header);
    }
}
