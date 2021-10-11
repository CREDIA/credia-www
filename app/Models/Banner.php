<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'banners';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['foto','indicador','titulo','descripcion','secuencia','estado','url','accion'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'indicador' => 'indicador de banners',
		'estado' => 'estado de banners',
		'foto' => 'fotografía de banners',
		'titulo' => 'título de banners',
		'descripcion' => 'descripción de banners',
		'secuencia' => 'secuencia de slider de inicio',
		'url' => 'url de botón de slider',
		'accion' => 'accion de botón de slider',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
		
		self::creating(function($model)
		{	

		});
		
		self::deleting(function($obj) {
			Storage::disk('public')->delete($obj->foto);
		});
	}
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | SCOPES
    |-----------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | ACCESORS
    |-----------------------------------------------------------------------*/

    /*------------------------------------------------------------------------
    | MUTATORS
    |-----------------------------------------------------------------------*/
	
	public function setFotoAttribute($value)
	{
		$attribute_name = "foto";
		$disk = "public";
		$destination_path = "images/fotos-banners";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
