<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function editarPerfil()
    {
        // Adicione lógica para exibir a página de edição de perfil
        return view('perfil.edit');
    }

    public function atualizarSenha(Request $request)
    {
        // Valide os dados do formulário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'senhaAtual' => 'required',
            'novaSenha' => 'nullable|min:6',
        ]);

        // Obtenha o usuário autenticado
        $usuario = auth()->user();

        // Verifique a senha atual
        if (Hash::check($request->senhaAtual, $usuario->password)) {
            // A senha atual está correta, então atualize o perfil
            $usuario->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->novaSenha ? Hash::make($request->novaSenha) : $usuario->password,
            ]);

            return redirect()
                ->route('perfil.editar')
                ->with('success', 'Perfil atualizado com sucesso');
        } else {
            return redirect()
                ->route('perfil.editar')
                ->with('error', 'Senha atual incorreta');
        }
    }
}
