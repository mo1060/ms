<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proband extends Model
{
    //
    protected $table = 'probanden'; 


    protected $casts = [
        'grill' => 'array'
    ];


}
