<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
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
		// if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = Image::make($value)->encode('jpg', 90);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the public path to the database
        // but first, remove "public/" from the path, since we're pointing to it from the root folder
        // that way, what gets saved in the database is the user-accesible URL
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
	}
}
