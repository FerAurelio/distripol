<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplication extends Model
{
      
    protected $guarded=['id'];
  
    public function productos()
    {
    return $this->hasMany(Product::class );
    }
  
    
  
  
  }
