<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogCommentRequest;
use Illuminate\Http\Request;
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
		$banner = Banner::where([['indicador', '=', 'blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();

		$articulos = Blog::where([['estado', '=', '1']])->orderBy('fecha', 'desc')->paginate(6);


		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"articulos" => $articulos,
			"redes" => $redes,
		);

		return View::make('pagina-web.blog.blog')->with($data);
	}

	public function search_categoria_blog($categoria, $id)
	{
		$banner = Banner::where([['indicador', '=', 'blog']])->get();
		$foto = $banner->first()->foto;
		$titulo = $banner->first()->titulo;
		$contenido = $banner->first()->descripcion;
		$redes = Social::all();

		$articulos = Blog::where([['categoria_id', $id], ['estado', '=', '1']])->orderBy('fecha', 'desc')->paginate(6);

		$data = array(
			"foto" => $foto,
			"titulo" => $titulo,
			"contenido" => $contenido,
			"redes" => $redes,
			"articulos" => $articulos,
		);

		return View::make('pagina-web.blog.blog')->with($data);
	}

	public function blogdetalle($slug, $id)
	{
		$articulo = Blog::where([['id', $id], ['estado', '1']])->get();
		$redes = Social::all();
		$comentarios = BlogComment::where([['blog_post_id', $id]])->get();
		$archive = $articulo->first()->categoria()->get()->first()->nombre;

		$categorias = Categoria::all();

		$variable = Blog::find($id);

		if (Cache::has($id) == false) {
			Cache::add($id, 'contador', 0.30);
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

		return View::make('pagina-web.blog.blogdetalle')->with($data);
	}

	public function store(BlogCommentRequest $request, $slug, $id)
	{
		$comentario = new BlogComment;
		$comentario->blog_post_id = $id;
		$comentario->nombre = $request->nombre;
		$comentario->correo = $request->correo;
		$comentario->estado = 0;
		$comentario->comentario = $request->comentario;
		$comentario->parent = 0;
		$comentario->save();
		return redirect()->route('blogdetalle', ['slug' => $slug, 'id' => $id]);
	}
}
