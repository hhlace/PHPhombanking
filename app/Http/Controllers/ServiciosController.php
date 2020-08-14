<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movimientos;


class ServiciosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //formulario pago de servicios
    public function create()
    {
        return view('servicios.create');
    }

    public function store()
    {

        $user = auth()->user();
        
        $data = request()->validate([
    		'description' => 'required',
    		'debit' => ['required', 'numeric'],
            'credit' => [],
            'balance' => [],
    	]);

        $data['credit'] = 0;
        $newAmount = $user['balance'] - $data['debit'];
        $data['balance'] = $newAmount;
        
        $user->update(
            ['balance' => $newAmount]
        );


        auth()->user()->movimientos()->create($data);

    	return redirect('/movimientos/'.auth()->user()->id);
    	
    }

    public function deposit()
    {
        return view('servicios.deposit');
    }

    public function storeDeposit()
    {

        $user = auth()->user();
        

        $data = request()->validate([
            'description' => 'required',
            'debit' => [],
            'credit' => ['required', 'numeric'],
            'balance' => [],
        ]);

        $data['debit'] = 0;
        $newBalance = $user['balance'] + $data['credit'];
        $data['balance'] = $newBalance;
        
        $user->update(
            ['balance' => $newBalance]
        );

        auth()->user()->movimientos()->create($data);

        return redirect('/movimientos/'.auth()->user()->id);
        
    }

}
