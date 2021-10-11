<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'videos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['nombre','album_id','url_video','cover','descripcion','secuencia'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['url_video','cover'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'album_id' => 'album',
		'url_video' => 'url de video',
		'descripcion' => 'descripcion',
		'cover' => 'foto de portada',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
        self::creating(function($model)
		{
			$secuencia = Video::all()->max('secuencia');
			$prefix = Video::get_prefix();
			$suffix = $secuencia ? ($secuencia+1) : 1;
			
			$model->nombre = $prefix . str_pad($suffix, 7, "0", STR_PAD_LEFT);
			$model->secuencia = $suffix;
        });
		
		self::deleting(function($obj) {	
			Storage::disk('public')->delete($obj->cover);
        });
    }
	
	private static function get_prefix()
	{
		return "VIDEO-";
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
		return $this->belongsToMany('App\Models\Componente', 'video_componente','video_id');
	}
	
	public function actividades()
	{
		return $this->belongsToMany('App\Models\Actividad', 'video_actividad','video_id');
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
		$destination_path = "images/videos/cover";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
