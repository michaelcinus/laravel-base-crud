<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagamenti extends Model
{
    protected $table = 'pagamenti';
    protected $fillable = [
        "status" ,
        "price" 
    ] ;
}
