<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoluntarioRequest;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Voluntario;
use App\Models\ActividadVoluntario;
use App\Models\Social;
use App\Models\FotoVoluntario;
use View;
use Illuminate\Support\Facades\Storage;
use File;

class VoluntarioController extends Controller
{
	public function voluntario()
	{
		$banner = Banner::where([['indicador','=','voluntario']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$actividades = ActividadVoluntario::all();
		$redes = Social::all();
		
		$voluntarios = FotoVoluntario::all();
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"actividades" => $actividades,
			"redes" => $redes,
			"voluntarios" => $voluntarios,
		);
		
		return View::make('pagina-web.voluntarios.voluntario')->with($data);
	}
	
	public function store(VoluntarioRequest $request)
    {
		$voluntario = new Voluntario;

        $voluntario->nombre = $request->nombre;
        $voluntario->correo = $request->correo;
		
        $file = $request->file('file');
		$file_name = $file->getClientOriginalName();
		
		Storage::disk('public')->put('curriculums/'.$file_name, File::get($file));
		
        $voluntario->archivo =  Storage::url('uploads/curriculums/'.$file_name);
        $voluntario->descripcion = $request->descripcion;
        $voluntario->actividad_voluntario_id = $request->actividad_id;
					
		$voluntario->save();
					
		return redirect('/voluntarios#form-voluntarios');
    }
}
