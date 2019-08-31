<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    
	// protected $table = "articulos";
	
	protected $fillable = [
	
		"Nombre_Articulo",
		"Precio"
	
	];
	
	use SoftDeletes;
	
	protected $dates = ["deleted_at"];
	
	
	public function cliente()
	{
		
		return $this->belongsTo("App\Cliente");
		
	}
	
}
