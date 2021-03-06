<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\BlogRequest as StoreRequest;
use App\Http\Requests\BlogRequest as UpdateRequest;

use App\Authorizable;
use Auth;

class BlogCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
		$user = Auth::user();
		
        $this->crud->setModel('App\Models\Blog');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/blog');
        $this->crud->setEntityNameStrings('artículo', 'artículos de blog');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		if($user->hasRole('Creador de articulos'))
		{
			$this->crud->denyAccess(['delete','revisions']);
		}
		
		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título'
		]);
		
		$this->crud->addColumn([
			'name' => 'nombre',
			'label' => 'Fuente'
		]);
		
		$this->crud->addColumn([
			'name' => 'categoria_id',
			'label' => 'Categoría',
			'type' => "select",
			'entity' => 'categoria',
			'attribute' => "nombre",
			'model' => "App\Models\Categoria",
		]);
		
		$this->crud->addColumn([
			'name' => 'fecha',
			'label' => 'Fecha'
		]);
		
		if($user->hasRole('Super Administrador|Administrador Web|Editor de articulos'))
		{
			$this->crud->addColumn([
				'name' => 'estado',
				'label' => 'Estado',
				'type' => 'boolean',
				'options' => [0 => 'Borrador', 1 => 'Públicado'],
			]);
				
			$this->crud->addField([
				'name' => 'estado',
				'label' => '',
				'type' => 'toggleButtom_blog',
				'options' => [ 
							0 => "Borrador",
							1 => "Publicado",
						],
						'tab' => 'Datos generales',
			],'update');
		}
		
		$this->crud->addField([
			'name' => 'foto',
			'label' => "Fotografía",
			'type' => 'upload',
			'upload' => true,
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'separator0',
			'type' => 'custom_html',
			'value' => '<hr>',
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el título del artículo *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'categoria_id',
			'label' => 'Categoría',
			'type' => "select2",
			'entity' => 'categoria',
			'attribute' => "nombre",
			'model' => "App\Models\Categoria",
			'wrapperAttributes' => [
				'class' => 'form-group col-md-8',
			], 
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'fecha',
			'label' => "Fecha",
			'type' => 'date_picker',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-4',
			],
			'date_picker_options' => [
				'todayBtn' => true,
				'format' => 'dd-mm-yyyy',
				'language' => 'es'
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'separator1',
			'type' => 'custom_html',
			'value' => '<hr>',
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'nombre',
			'label' => "Fuente",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el nombre *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'correo',
			'label' => "Correo",
			'type' => 'email',
			'attributes' => [
				'placeholder' => 'Agregue el correo de la fuente *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			],
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'separator2',
			'type' => 'custom_html',
			'value' => '<hr>',
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'contenido_1',
			'label' => "Contenido del artículo",
			'type' => 'summernote',
			'tab' => 'Datos generales',
		]);
		
		$this->crud->addField([
			'name' => 'fotos',
			'label' => "Fotografías de slider",
			'type' => 'upload_multiple',
			'upload' => true,
			'tab' => 'Galería',
		]);
    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }
}
