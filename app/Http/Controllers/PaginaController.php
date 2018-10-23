<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use View;

class PaginaController extends Controller
{
	public function inicio()
	{
		$sliders = Slider::where([['indicador','=','inicio']])->orderBy('secuencia', 'asc')->get();
		
		
		$data = array(
			"sliders" => $sliders,
		);
		
		return View::make('index')->with($data);
	}
	
	public function snosotros()
	{
		return view('sobrenosotros');
	}
	
	public function proyecto()
	{
		return view('proyecto');
	}
	
	public function evento()
	{
		return view('evento');
	}
	
	public function eventodetalle()
	{
		return view('eventodetalle');
	}
	
	public function blog()
	{
		return view('blog');
	}
	
	public function blogdetalle()
	{
		return view('blogdetalle');
	}
	
	public function donacion()
	{
		return view('donacion');
	}
	
	public function faq()
	{
		return view('faq');
	}
	
	public function mision()
	{
		return view('mision');
	}
	
	public function galeria()
	{
		return view('galeria');
	}
	
	public function precio()
	{
		return view('precio');
	}
	
	public function servicio()
	{
		return view('servicio');
	}
	
	public function equipo()
	{
		return view('equipo');
	}
	
	public function voluntario()
	{
		return view('voluntario');
	}
	
	public function contacto()
	{
		return view('contacto');
	}
}
