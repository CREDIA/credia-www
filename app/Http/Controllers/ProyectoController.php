<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Social;
use App\Models\Proyecto;
use App\Models\Categoria;
use App\User;
use View;

class ProyectoController extends Controller
{	
	public function proyecto()
	{
		$banner = Banner::where([['indicador','=','proyectos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$proyectos = Proyecto::where([['avance','<','100']])->orderBy('fecha_convenio','asc')->get();
		$ejecuciones = Proyecto::where([['avance','=','100']])->orderBy('fecha_convenio','asc')->paginate(6);
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"ejecuciones" => $ejecuciones,
			"proyectos" => $proyectos,
		);
		
		return View::make('pagina-web.proyectos.proyecto')->with($data);
	}
	
	public function search_categoria_proyecto($categoria,$id)
	{
		$banner = Banner::where([['indicador','=','Proyectos']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();

		$categoria = Categoria::where([['id',$id]])->get();
		$proyectos = $categoria->first()->proyectos()->where('estado','1')->orderBy('id','desc')->paginate(6);
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"proyectos" => $proyectos,
		);
		
		return View::make('pagina-web.proyectos.proyecto')->with($data);
	}
	
	public function proyectodetalle($slug,$id)
	{	
		$proyecto = Proyecto::where([['id','=',$id],['estado','=','1']])->get();
		$redes = Social::all();
		
		$data = array(
			"proyecto" => $proyecto,
			"redes" => $redes,
		);
		
		return View::make('pagina-web.proyectos.proyectodetalle')->with($data);
	}
}
