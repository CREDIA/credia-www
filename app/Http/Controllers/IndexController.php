<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoluntarioRequest;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Voluntario;
use App\Models\ActividadVoluntario;
use App\Models\Evento;
use App\Models\Proyecto;
use App\Models\Categoria;
use App\Models\Social;
use App\Models\Blog;
use View;

use Storage;
use File;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
	public function index()
	{
		$sliders = Banner::where([['indicador', '=', 'inicio']])->orderBy('secuencia', 'asc')->get();
		$actividades = ActividadVoluntario::all();
		$eventos = Evento::orderBy('id', 'desc')->take(3)->get();
		$redes = Social::all();
		if (Auth::check()) {
			$proyectos = Proyecto::orderBy('fecha_convenio', 'desc')->take(3)->get();
		} else {
			$proyectos = Proyecto::where('estado', 1)->orderBy('fecha_convenio', 'desc')->take(3)->get();
		}
		$articulos = Blog::where([['estado', '=', '1']])->orderBy('fecha', 'desc')->take(3)->get();

		$data = array(
			"sliders" => $sliders,
			"actividades" => $actividades,
			"eventos" => $eventos,
			"redes" => $redes,
			"proyectos" => $proyectos,
			"articulos" => $articulos,
		);

		return View::make('pagina-web.index')->with($data);
	}

	public function store(VoluntarioRequest $request)
	{
		$voluntario = new Voluntario;

		$voluntario->nombre = $request->nombre;
		$voluntario->correo = $request->correo;

		$file = $request->file('file');
		$file_name = $file->getClientOriginalName();

		Storage::disk('public')->put('curriculums/' . $file_name, File::get($file));

		$voluntario->archivo =  Storage::url('uploads/curriculums/' . $file_name);
		$voluntario->descripcion = $request->descripcion;
		$voluntario->actividad_voluntario_id = $request->actividad_id;

		$voluntario->save();

		return redirect('/#form-voluntario');
	}
}
