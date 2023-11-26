<?php

namespace App\Http\Controllers;
use App\Models\Logica;
use App\Models\Css;
use App\Models\Html;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jogadoresCount = DB::connection('mysql_second')
        ->table('users')
        ->count();

        $usersCount = User::count();  // Correção aqui

        return view('home', compact('jogadoresCount', 'usersCount'));
    }
}
