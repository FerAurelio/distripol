<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    protected $guarded=['id'];

    public function productos()
    {
    return $this->hasMany(Product::class );
    }
}