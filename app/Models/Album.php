<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'albums';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','tipo','estado','descripcion','fecha','cover'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['cover'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'nombre' => 'nombre',
		'tipo' => 'tipo',
		'estado' => 'estado',
		'fecha' => 'fecha',
		'descripcion' => 'descripcion',
		'cover' => 'cover',
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
			Storage::disk('public')->delete($obj->cover);
        });
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function fotos(){
		return $this-> hasMany('App\Models\Foto');
	}
	
	public function videos(){
		return $this-> hasMany('App\Models\Video');
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
	
	public function setCoverAttribute($value)
	{
		$attribute_name = "cover";
		$disk = "public";
		$destination_path = "uploads/multimedia/portada-album";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
