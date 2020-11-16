<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    protected $guarded=['id'];

    public function section()
    {
    return $this->belongsTo(Section::class );
    }
    public function productos()
    {
    return $this->hasMany(Product::class );
    }
  
}
