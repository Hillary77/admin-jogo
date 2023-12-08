<?php

namespace App\Http\Controllers;

use App\Models\Html;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class HtmlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = DB::connection('mysql_second')
        ->table('htmls')
        ->get();

    return view('html.index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(view: 'html.create');
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
            'pontos' => ['required'],
        ]);

        DB::connection('mysql_second')
            ->table('htmls')
            ->insert([
                'pergunta' => $request->input('pergunta'),
                'subfase' => $request->input('subfase'),
                'resposta_correta' => $request->input('resposta_correta'),
                'opcao1' => $request->input('opcao1'),
                'opcao2' => $request->input('opcao2'),
                'opcao3' => $request->input('opcao3'),
                'opcao4' => $request->input('opcao4'),
                'pontos' => $request->input('pontos')
            ]);
            return redirect()->route('html.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function show(Html $html)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function edit(Html $html)
    {
        return view('html.edit', ['value' => $html]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Html $html)
    {
            //Atualizar dados ja cadastrados no banco de dados
            $html->pergunta = $request->input('pergunta');
            $html->subfase = $request->input('subfase');
            $html->opcao1 = $request->input('opcao1');
            $html->opcao2 = $request->input('opcao2');
            $html->opcao3 = $request->input('opcao3');
            $html->opcao4 = $request->input('opcao4');
            $html->pontos = $request->input('pontos');
            $html->save();
            //Redirecionar depois de concluído
            return redirect()->route('html.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function destroy(Html $html)
    {
         //Remover dados do banco de dados
       $html->delete();
       return redirect()->route('html.index');
    }
}
