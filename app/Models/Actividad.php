<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Actividad extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;
	
    protected $table = 'actividades';
	protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $casts = ['galeria' => 'array'];
    protected $fillable = ['titulo','descripcion','contenido','foto','estado','indicador','galeria','icono','componente_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto','galeria','icono'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'estado' => 'estado de actividad',
		'foto' => 'fotografía de actividad',
		'titulo' => 'título de actividad',
		'descripcion' => 'descripción de actividad',
		'contenido' => 'contenido de actividad',
		'indicador' => 'componente',
		'galeria' => 'galeria',
		'icono' => 'icono',
		'componente_id' => 'componente_id',
	);
    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
		
		self::creating(function($model){

        });
		
		self::updating(function($model){
			
        });
		
		self::deleting(function($obj) {	
			Storage::disk('public')->delete($obj->foto);
			Storage::disk('public')->delete($obj->icono);
			
			if (count((array)$obj->galeria)) {
                foreach ($obj->galeria as $file_path) {
					Storage::disk('public')->delete($file_path);
                }
            }
        });
	}
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function componente()
	{
		return $this->belongsTo('App\Models\Componente');
	}
	
	public function fotos()
	{
		return $this->belongsToMany('App\Models\Foto','foto_actividad','actividad_id');
	}
	
	public function videos()
	{
		return $this->belongsToMany('App\Models\Video','video_actividad','actividad_id');
	}
	
	public function descargas()
	{
		return $this->belongsToMany('App\Models\Descarga','descarga_actividad','actividad_id');
	}
	
    /*------------------------------------------------------------------------
    | SCOPES
    |------------------------------------------------------------------------*/
    /*------------------------------------------------------------------------
    | ACCESORS
    |------------------------------------------------------------------------*/
	
    /*------------------------------------------------------------------------
    | MUTATORS
    |------------------------------------------------------------------------*/
	
	public function setFotoAttribute($value)
	{
		$attribute_name = "foto";
		$disk = "public";
		$destination_path = "/uploads/images/fotos-actividades";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
	
	public function setGaleriasAttribute($value)
    {
        $attribute_name = "galeria";
        $disk = "public";
        $destination_path = "/uploads/images/fotos-actividades/gallery";
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
	
	public function setIconoAttribute($value)
	{
		$attribute_name = "icono";
		$disk = "public";
		$destination_path = "uploads/images/fotos-actividades/icono";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
