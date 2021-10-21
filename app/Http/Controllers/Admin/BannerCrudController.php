<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\BannerRequest as StoreRequest;
use App\Http\Requests\BannerRequest as UpdateRequest;

use App\Authorizable;

class BannerCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {

        $this->crud->setModel('App\Models\Banner');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/banner');
        $this->crud->setEntityNameStrings('banner', 'banners');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addColumn([
			'name' => 'indicador',
			'label' => 'Pertenece',
			'type' => 'select_from_array',
			'options' => ['inicio' => 'Inicio','quienes_somos' => 'Quienes somos','observatorio' => 'Observatorio',
						  'cendoc' => 'Centro de documentacion','educacion_ambiental' => 'Educación Ambiental',
						  'estructura_organizativa' => 'Estructura organizativa','equipo_trabajo' => 'Equipo de trabajo',
						  'convenios' => 'Convenios interinstitucionales','informes' => 'Informes Anuales',
						  'proyectos' => 'Proyectos','sistema' => 'Sistema','videoteca' => 'Videoteca','galeria' => 'Galería',
						  'blog' => 'Blog','contacto'=> 'Contactenos','evento'=> 'Eventos','servicio'=> 'Servicios',
						  'galeria'=> 'Galería','faq'=> 'Preguntas Frecuentes','actividad'=> 'Actividades',
						  'voluntario' => 'Voluntariado','album_fotos' => 'Álbum de fotos','album_videos' => 'Álbum de videos',
						  'fotos' => 'Fotos','videos' => 'Videos','servicio_oficina'=> 'Alquiler Oficina'],
		]);
		
		$this->crud->addColumn([
			'name' => 'titulo',
			'label' => 'Título'
		]);
		
		$this->crud->addColumn([
			'name' => 'created_at',
			'label' => 'Fecha elaboración',
		]);
		
		$this->crud->addField([
			'name'  => 'estado',
			'label' => 'Agregar Botón',
			'type'  => 'fieldhidden',
			'options' => [
                    0 => "No",
                    1 => "Si",
            ],
			'inline' => true,
			'hide_when' => [
					0 => ['url','separato2','accion'],
			],
			'default' => false,
			'wrapperAttributes' => [
				'class' => 'form-group col-md-6',
			],
		]);
		
		$this->crud->addField([
			'name' => 'separator1',
			'type' => 'custom_html',
			'value' => '<hr>'
		]);
		
		$this->crud->addField([
			'name' => 'url',
			'label' => 'Agregue URL',
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue la url de redirección *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'accion',
			'label' => "Texto acción de botón",
			'type' => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el texto descriptivo de acción del botón *',
			],
			'wrapperAttributes' => [
				'class' => 'form-group col-md-12',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'separator2',
			'type' => 'custom_html',
			'value' => '<hr name="separato2">'
		]);
		$this->crud->addField([ // image
			'label' => "Fotografía",
			'name' => "foto",
			'type' => 'image',
			'upload' => true,
			'crop' => true, 
			'aspect_ratio' => '3.33', // omit or set to 0 to allow any aspect ratio
			'disk' => 'public',
			'prefix' => 'uploads/' 
			
		]);
		
		$this->crud->addField([
			'name' => 'separator3',
			'type' => 'custom_html',
			'value' => '<hr>'
		]);
		
		$this->crud->addField([
			'name' => 'indicador',
			'label' => 'Página',
			'type' => 'select2_from_array',
			'options' =>  ['inicio' => 'Inicio','quienes_somos' => 'Quienes somos','observatorio' => 'Observatorio',
						  'cendoc' => 'Centro de documentacion','educacion_ambiental' => 'Educación Ambiental',
						  'estructura_organizativa' => 'Estructura organizativa','equipo_trabajo' => 'Equipo de trabajo',
						  'convenios' => 'Convenios interinstitucionales','informes' => 'Informes Anuales',
						  'proyectos' => 'Proyectos','sistema' => 'Sistema','videoteca' => 'Videoteca','galeria' => 'Galería',
						  'blog' => 'Blog','contacto'=> 'Contactenos','evento'=> 'Eventos','servicio'=> 'Servicios',
						  'galeria'=> 'Galería','faq'=> 'Preguntas Frecuentes','actividad'=> 'Actividades',
						  'voluntario' => 'Voluntariado','album_fotos' => 'Álbum de fotos','album_videos' => 'Álbum de videos',
						  'fotos' => 'Fotos','videos' => 'Videos','servicio_oficina'=> 'Alquiler Oficina'],
			'allows_null' => true,
		]);
		
		$this->crud->addField([
			'name' => 'titulo',
			'label' => "Título",
			'type' => 'text',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-8',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'secuencia',
			'label' => "Secuencia",
			'type' => 'number',
			'wrapperAttributes' => [
				'class' => 'form-group col-md-4',
			], 
		]);
		
		$this->crud->addField([
			'name' => 'descripcion',
			'label' => 'Descripción',
			'type' => 'textarea',
			'attributes' => [
				'placeholder' => 'Agregue la descripción de la imagen',
				'style' => 'text-align:justify;resize:vertical;',
				'rows' => '4'
			]
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
