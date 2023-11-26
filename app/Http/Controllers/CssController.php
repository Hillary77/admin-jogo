<?php

namespace App\Http\Controllers;

use App\Models\Css;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = DB::connection('mysql_second')
        ->table('csses')
        ->get();

    return view('css.index', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(view: 'css.create');
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
        ]);

        DB::connection('mysql_second')
            ->table('csses')
            ->insert([
                'pergunta' => $request->input('pergunta'),
                'subfase' => $request->input('subfase'),
                'resposta_correta' => $request->input('resposta_correta'),
                'opcao1' => $request->input('opcao1'),
                'opcao2' => $request->input('opcao2'),
                'opcao3' => $request->input('opcao3'),
                'opcao4' => $request->input('opcao4'),
            ]);
            return redirect()->route('css.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function show(Css $css)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function edit(Css $css)
    {
        return view('css.edit', ['value' => $css]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Css $css)
    {
            //Atualizar dados ja cadastrados no banco de dados
            $css->pergunta = $request->input('pergunta');
            $css->subfase = $request->input('subfase');
            $css->opcao1 = $request->input('opcao1');
            $css->opcao2 = $request->input('opcao2');
            $css->opcao3 = $request->input('opcao3');
            $css->opcao4 = $request->input('opcao4');
            $css->save();
            //Redirecionar depois de concluído
            return redirect()->route('css.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Css  $css
     * @return \Illuminate\Http\Response
     */
    public function destroy(Css $css)
    {
           //Remover dados do banco de dados
       $css->delete();
       return redirect()->route('css.index');
    }
}
