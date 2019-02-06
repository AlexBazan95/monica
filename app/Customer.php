<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public static function addVisitor($data)
    {
    	DB::table('visitors')->insert([
    		'city' => array_get($data, 'city'),
			'continent' => array_get($data, 'continent'),
			'country' => array_get($data, 'country'),
			'countryCode' => array_get($data, 'countryCode'),
			'created_at' => date('Y-m-d h:i:s'),
			'ip' => array_get($data, 'ip'),
			'isp' => array_get($data, 'isp'),
			'lat' => array_get($data, 'lat'),
			'lon' => array_get($data, 'lon'),
			'updated_at' => date('Y-m-d h:i:s')
    	]);

    	return response()->json('added');
    }
}
