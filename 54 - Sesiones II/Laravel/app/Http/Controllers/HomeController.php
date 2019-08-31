<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request)
    {
		
		/*$user = Auth::user();
		
        return view('home',compact('user'));*/
		
		// $request->session()->put(['Marc'=>'Administrador']);
		
		// session(['Maria'=>'Estudiante']);
		
		// $request->session()->forget('Maria');
		
		// $request->session()->flush();
		
		//$request->session()->flash('Entrada1', 'Éxito 1');
		
		// $request->session()->reflash();
		
		//$request->session()->keep(['Alejandro', 'Administrador']);
		
		$request->session()->regenerate();
		
		
		return $request->session()->all();
		
    }
}