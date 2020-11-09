<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=['id'];

    
    public function subsection()
    {
    return $this->belongsTo("App/Subsection", "subsection_id" );
    }


    public function aplication()
    {
    return $this->belongsTo("App/Aplication", "aplication_id" );
    }


    public function brand()
    {
    return $this->belongsTo("App/Brand", "brand_id" );
    }   
    

    public function power()
    {
    return $this->belongsTo("App/Power", "power_id" );
    }


    public function quality()
    {
    return $this->belongsTo("App/Quality", "quality_id" );
    }
   

    public function segment()
    {
    return $this->belongsTo("App/Segment", "segment_id" );
    }



}
