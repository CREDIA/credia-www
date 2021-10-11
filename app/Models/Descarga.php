<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Descarga extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'descargas';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $casts = ['archivos' => 'array'];
    protected $fillable = ['nombre','archivos','descripcion','estado','secuencia'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['archivos'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'nombre' => 'nombre',
		'archivos' => 'archivos',
		'descripcion' => 'descripcion',
		'estado' => 'estado',
		'secuencia' => 'secuencia',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
        self::creating(function($model)
		{
			$secuencia = Descarga::all()->max('secuencia');
			$prefix = Descarga::get_prefix();
			$suffix = $secuencia ? ($secuencia+1) : 1;
			
			$model->nombre = $prefix . str_pad($suffix, 7, "0", STR_PAD_LEFT);
			$model->secuencia = $suffix;
        });
		
		self::deleting(function($obj) {
			if(count((array)$obj->archivos)) {
				foreach ($obj->archivos as $file_path) {
					Storage::disk('public')->delete($file_path);
				}
            }
        });
    }
	
	private static function get_prefix()
	{
		return "ARCHIVO-";
	}
	
	public function identifiableName()
    {
        return $this->nombre;
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function componentes()
	{
		return $this->belongsToMany('App\Models\Componente', 'descarga_componente','descarga_id');
	}
	
	public function actividades()
	{
		return $this->belongsToMany('App\Models\Actividad', 'descarga_actividad','descarga_id');
	}
	
    /*-------------------------------------------------------------------------
    | SCOPES
    |------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | ACCESORS
    |------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | MUTATORS
    |------------------------------------------------------------------------*/
	
	public function setArchivosAttribute($value)
    {
        $attribute_name = "archivos";
        $disk = "public";
        $destination_path = "multimedia/descargas";
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
