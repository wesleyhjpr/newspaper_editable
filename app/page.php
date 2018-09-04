<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page';
    protected $fillable = [
    	'chapeu',
    	'titulo',
        'chamada',
        'data'
    ];
}
