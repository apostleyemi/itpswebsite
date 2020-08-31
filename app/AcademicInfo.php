<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicInfo extends Model
{
    //
    protected $table='academic_info';

    protected $fillable=[
        'institution', 'discipline','duration','itstate','itcity','academic','letter', 'passport',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
