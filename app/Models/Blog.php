<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;

    protected $table = 'blog_posts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
	protected $casts = ['fotos' => 'array'];
    protected $fillable = ['foto','titulo','fecha','contenido_1','estado','fotos',
						   'total_vista','nombre','correo','categoria_id','user_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $visible = ['foto','fotos'];
	protected $guard_name = 'web';
	
	protected $revisionCreationsEnabled = true;
	protected $revisionFormattedFieldNames = array(
		'nombre' => 'nombre',
		'correo' => 'correo',
		'estado' => 'estado de artículo',
		'foto' => 'fotografía de artículo',
		'fotos' => 'fotografías de artículo',
		'titulo' => 'título de artículo',
		'fecha' => 'fecha de artículo',
		'descripcion' => 'descripción de artículo',
		'contenido_1' => 'contenido de artículo',
		'categoria_id' => 'categoria de artículo',
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
			
            if (count((array)$obj->fotos)) {
                foreach ($obj->fotos as $file_path) {
					Storage::disk('public')->delete($file_path);
                }
            }
        });
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |-----------------------------------------------------------------------*/
	
	public function blogcomments()
	{
		return $this->hasMany('App\Models\BlogComment','blog_post_id');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}
	
	public function categoria()
	{
		return $this->belongsTo('App\Models\Categoria');
	}
	
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
		$destination_path = "images/blog-articles-photos";
		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
	}
	
	public function setFotosAttribute($value)
    {
        $attribute_name = "fotos";
        $disk = "public";
        $destination_path = "uploads/images/blog-articles-photos/gallery";
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
