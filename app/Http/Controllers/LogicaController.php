<?php

namespace App\Http\Controllers;

use App\Models\Logica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LogicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Puxar todos os dados do segundo banco de dados e enviar para a página de visualização
        $dados = DB::connection('mysql_second')
            ->table('logicas')
            ->get();

        return view('logica.index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(view: 'logica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validador = $request->validate([
            'pergunta' => ['required'],
            'subfase' => ['required'],
            'resposta_correta' => ['required'],
            'opcao1' => ['required'],
            'opcao2' => ['required'],
            'opcao3' => ['required'],
            'opcao4' => ['required'],
            'pontos' => ['required']
        ]);

        DB::connection('mysql_second')
            ->table('logicas')
            ->insert([
                'pergunta' => $request->input('pergunta'),
                'subfase' => $request->input('subfase'),
                'resposta_correta' => $request->input('resposta_correta'),
                'opcao1' => $request->input('opcao1'),
                'opcao2' => $request->input('opcao2'),
                'opcao3' => $request->input('opcao3'),
                'opcao4' => $request->input('opcao4'),
                'pontos' => $request->input('pontos'),
            ]);
            return redirect()->route('logica.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function show(Logica $logica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function edit(Logica $logica)
    {
        
        return view('logica.edit', ['value' => $logica]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logica $logica)
    {
            //Atualizar dados ja cadastrados no banco de dados
            $logica->pergunta = $request->input('pergunta');
            $logica->subfase = $request->input('subfase');
            $logica->resposta_correta = $request->input('resposta_correta');
            $logica->opcao1 = $request->input('opcao1');
            $logica->opcao2 = $request->input('opcao2');
            $logica->opcao3 = $request->input('opcao3');
            $logica->opcao4 = $request->input('opcao4');
            $logica->pontos = $request->input('pontos');
            $logica->save();
            //Redirecionar depois de concluído
            return redirect()->route('logica.index');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logica  $logica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logica $logica)
    {
       //Remover dados do banco de dados
       $logica->delete();
       return redirect()->route('logica.index');
    }
}
