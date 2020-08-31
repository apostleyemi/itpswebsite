<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    //
    protected $table='options';
    protected $fillable=[
        'options', 'question_id','is_correct',
    ];

    public  function question(){
        return $this->belongsTo('App\Questions');
    }

    public  function answer(){
        return $this->hasOne('App\Answer', 'selected_option');
    }


}
