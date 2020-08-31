<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $table='answer';
    protected $fillable=[
      'selected_option','user_id','question_id',
    ];

    public  function user(){
        return $this->belongsTo('App\User');
    }

    public  function question(){
        return $this->belongsTo('App\Questions', 'question_id');

    }
    public function option(){
        return $this->belongsTo('App\Options', 'selected_option');
    }

}
