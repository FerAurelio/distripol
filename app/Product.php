<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=['id'];

    
    public function subsection()
    {
    return $this->belongsTo(Subsection::class );
    }


    public function aplication()
    {
    return $this->belongsTo(Aplication::class  );
    }


    public function brand()
    {
    return $this->belongsTo(Brand::class);
    }   
    

    public function power()
    {
    return $this->belongsTo(Power::class  );
    }


    public function quality()
    {
    return $this->belongsTo(Quality::class);
    }
   

    public function segment()
    {
    return $this->belongsTo(Segment::class  );
    }



}
