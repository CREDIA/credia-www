<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class Sistema extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'sistemas';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $casts = ['fotos' => 'array'];
    protected $fillable = ['foto','texto_mini','nombre_sistema','descripcion','url','contenido','estado','fotos'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto','fotos'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'foto' => 'fotografía',
		'texto_mini' => 'texto miniatura',
		'nombre_sistema' => 'nombre de sistema',
		'descripcion' => 'descripción',
		'fotos' => 'fotografías',
		'url' => 'dirección url',
		'contenido' => 'contenido de sistema',
		'estado' => 'estado',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
	{
		parent::boot();
		
		self::deleting(function($obj) {	
			Storage::disk('public')->delete($obj->foto);
			
            if (count((array)$obj->fotos)) {
                foreach ($obj->fotos as $file_path) {
                    Storage::disk('public')->delete($file_path);
                }
            }
        });
	}
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
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
		$destination_path = "images/fotos-sistemas";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
	
	public function setFotosAttribute($value)
    {
        $attribute_name = "fotos";
        $disk = "public";
        $destination_path = "uploads/images/fotos-sistemas/gallery";
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
