<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded=['id'];



    public function category()
    {
    return $this->belongsTo(Category::class );
    }

    public function subsections()
    {
    return $this->hasMany(Subsection::class );
    }

}
