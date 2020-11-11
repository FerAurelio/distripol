<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $guarded=['id'];

    public function productos()
    {
    return $this->hasMany(Product::class );
    }
}
