<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogCommentRequest;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Categoria;
use App\Models\Social;
use App\User;
use Cache;
use View;

class BlogController extends Controller
{
	public function blog()
	{
		$banner = Banner::where([['indicador','=','blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();
		
		$articulos = Blog::orderBy('id','desc')->paginate(6);
		
		if(count($articulos) > 0){
			$id_articulo = $articulos->first()->id;
			$comentarios = BlogComment::where([['blog_post_id',$id_articulo]])->count();
		}else{
			$comentarios = 0;
		}
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"articulos" => $articulos,
			"redes" => $redes,
			"comentarios" => $comentarios,
		);
		
		return View::make('blog.blog')->with($data);
	}
	
	public function search_categoria_blog($categoria,$id)
	{
		$banner = Banner::where([['indicador','=','blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();

		$articulos = Blog::where([['categoria_id',$id]])->orderBy('id','desc')->paginate(6);
		
		if(count($articulos) >= 0){
			$id_articulo = $articulos->find('id');
			$comentarios = BlogComment::where([['blog_post_id',$id_articulo]])->count();
		}	
		
		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"articulos" => $articulos,
			"comentarios" => $comentarios,
		);
		
		return View::make('blog.blog')->with($data);
	}
	
	public function blogdetalle($slug,$id)
	{
		$articulo = Blog::where([['id',$id],['estado','0']])->get();
		$redes = Social::all();
		$comentarios = BlogComment::where([['blog_post_id',$id]])->get();
		$archive = $articulo->first()->categoria()->get()->first()->nombre;
		
		$categorias = Categoria::all();
		
		$variable = Blog::find($id);
		
		if(Cache::has($id)==false){
			Cache::add($id,'contador',0.30);
			$variable->total_vista++;
			$variable->save();
		}
		
		$data = array(
			"articulo" => $articulo,
			"categorias" => $categorias,
			"redes" => $redes,
			"comentarios" => $comentarios,
			"archive" => $archive,
		);
		
		return View::make('blog.blogdetalle')->with($data);
	}
	
	public function previo($slug,$id){
		return Blog::where('id', '<', $this->id)->orderBy('id', 'desc')->first();
	}
	
	public function siguiente($slug,$id){
		return Blog::where('id', '>', $this->id)->orderBy('id', 'asc')->first();
	}
	
	public function store(BlogCommentRequest $request,$slug,$id)
    {	
		$comentario = new BlogComment;

        $comentario->blog_post_id = $id;
        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->estado = 0;
        $comentario->comentario = $request->comentario;
        $comentario->parent = 0;
					
		$comentario->save();
					
		return redirect()->route('blogdetalle',['slug' => $slug,'id' => $id]);
    }
}
