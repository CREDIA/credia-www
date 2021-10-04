<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Proyecto extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'proyectos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['titulo','descripcion','subtitulo','foto','fecha_convenio','contenido','presupuesto',
						   'avance','utilizado','fecha_inicio','fecha_finalizacion','estado','user_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'titulo' => 'titulo',
		'descripcion' => 'descripcion',
		'subtitulo' => 'subtitulo',
		'foto' => 'foto',
		'fecha_convenio' => 'fecha de convenio',
		'contenido' => 'contenido',
		'presupuesto' => 'presupuesto',
		'avance' => 'avance',
		'utilizado' => 'utilizado',
		'fecha_inicio' => 'fecha de inicio',
		'fecha_finalizacion' => 'fecha de finalizacion',
		'estado' => 'estado',
		'user_id' => 'usuario',
	);

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
		self::creating(function($model)
		{
			$user_id = Auth::id();
			$model->user_id = $user_id;
        });
		
		self::deleting(function($obj) {
			Storage::disk('public')->delete($obj->foto);
		});
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function patrocinadores()
	{
		return $this->belongsToMany('App\Models\Patrocinador', 'proyecto_patrocinador','proyecto_id');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}
	
	public function categorias()
	{
	return $this->belongsToMany('App\Models\Categoria','proyecto_categoria','proyecto_id');
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
		$destination_path = "uploads/images/fotos-proyectos";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
}
