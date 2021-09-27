<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;

class BlogComment extends Model
{
    use CrudTrait;

    protected $table = 'blog_comments';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['blog_post_id','nombre','correo','estado','comentario','parent'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $guard_name = 'web';

    /*------------------------------------------------------------------------
    | FUNCTIONS
    |------------------------------------------------------------------------*/
	
	public static function boot()
    {
        parent::boot();
		
        self::creating(function($model)
		{
			
        });
		
		self::updating(function($model)
		{
			
        });
		
        self::deleting(function($obj) {
            if (count((array)$obj->fotos)) {
                foreach ($obj->fotos as $file_path) {
					Storage::disk('public_folder')->delete($obj->image);
                }
            }
        });
    
    }
	
    /*------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------------------------------------------*/
	
	public function blog()
	{
		return $this->belongsTo('App\Models\Blog');
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
}
