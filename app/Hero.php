<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    //Many to many relationship


    public function images()
    {
        return $this->belongsToMany('App\Image','path_id', 'description_id');
    }



}
