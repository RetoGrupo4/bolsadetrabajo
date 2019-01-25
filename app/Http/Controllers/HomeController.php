<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=\Auth::user();
        switch ($usuario->rol)
        {
            case 1:
                return redirect('admin');
                break;
            case 2:
                return redirect('empresas');
                break;
            case 3:
                return redirect('ofertas');
                break;
        }
    }
    
}
