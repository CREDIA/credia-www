<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Evento extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'eventos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['titulo','subtitulo','foto','fecha','contenido','organizador',
						   'horaInicio','horaFinal','direccion','telefono','correo',
						   'latitud','longitud'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto','latitud','longitud'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'titulo' => 'título',
		'subtitulo' => 'subtitulo',
		'foto' => 'foto',
		'fecha' => 'fecha',
		'contenido' => 'contenido de evento',
		'organizador' => 'organizador de evento',
		'horaInicio' => 'hora de inicio de evento',
		'horaFinal' => 'hora final de evento',
		'direccion' => 'direccion de evento',
		'telefono' => 'telefono de evento',
		'correo' => 'correo de evento',
		'latitud' => 'latitud',
		'longitud' => 'longitud',
	);

    /*-------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
		parent::boot();
		
		self::deleting(function($obj) {
			Storage::disk('public')->delete($obj->foto);
		});
    }
	
    /*-------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function patrocinadores()
	{
		return $this->belongsToMany('App\Models\Patrocinador', 'evento_patrocinador','evento_id');
	}
	
	public function contacto_eventos()
	{
		return $this->hasMany('App\Models\ContactoEvento');
	}
	
    /*-------------------------------------------------------------------------
    | SCOPES
    |------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------
    | ACCESORS
    |------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------
    | MUTATORS
    |------------------------------------------------------------------------*/
	
	public function setFotoAttribute($value)
	{
		$attribute_name = "foto";
		$disk = "public";
		$destination_path = "images/fotos-eventos";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
