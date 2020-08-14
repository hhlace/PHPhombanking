<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movimientos;

class MovimientosController extends Controller
{
    //Only run by auth users
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index($id)
    {
        
        $user = User::find($id);
        $movimientos = Movimientos::orderBy('id','asc')->get();

        return view('movimientos', [
            'user' => $user,
            'movimientos' => $movimientos,
        ]);
    }
}
