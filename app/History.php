<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //追記 (PHP/Laravel 17)
    protected $guarded = array('id');

    public static $rules = array(
        'news_id' => 'required',
        'edited_at' => 'required',
    );
    
}
