<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    protected $table='questions';

    protected $fillable=[
                    'question',
    ];


    public  function options(){

        return $this->hasMany('App\Options', 'question_id');
    }

    public function answer(){
        return $this->hasOne('App\Answer');

    }
}
