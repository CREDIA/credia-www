<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Foto extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'fotos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','album_id','fotos','descripcion','secuencia'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['fotos'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'album_id' => 'album',
		'fotos' => 'fotos',
		'descripcion' => 'descripcion',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
        self::creating(function($model)
		{
			$secuencia = Foto::all()->max('secuencia');
			$prefix = Foto::get_prefix();
			$suffix = $secuencia ? ($secuencia+1) : 1;
			
			$model->nombre = $prefix . str_pad($suffix, 7, "0", STR_PAD_LEFT);
			$model->secuencia = $suffix;
        });
		
		self::deleting(function($obj) {	
			Storage::disk('public')->delete($obj->fotos);
        });
    }
	
	private static function get_prefix()
	{
		return "FOTOS-";
	}
	
	public function identifiableName()
    {
        return $this->nombre;
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function album()
	{
		return $this->belongsTo('App\Models\Album');
	}
	
	public function componentes()
	{
		return $this->belongsToMany('App\Models\Componente', 'foto_componente','foto_id');
	}
	
	public function actividades()
	{
		return $this->belongsToMany('App\Models\Actividad', 'foto_actividad','foto_id');
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
	
	public function setFotosAttribute($value)
	{
		$attribute_name = "fotos";
		$disk = "public";
		$destination_path = "uploads/multimedia/fotos";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
