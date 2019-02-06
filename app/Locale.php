<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    protected $table = "locales";

    public static function getAllLocales()
    {
    	return Locale::get();
    }

    public static function getLocaleImg($loc)
    {
    	return Locale::where('lnk', $loc)->value('img');
    }

}
