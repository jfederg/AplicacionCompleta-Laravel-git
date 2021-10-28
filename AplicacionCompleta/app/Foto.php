<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
        protected $fillable = [
        'ruta_foto' 
    ];
    
        public function foto(){
        
        return $this->belongsTo('App\Foto');
        
    }
}
