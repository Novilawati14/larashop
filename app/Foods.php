<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foods extends Model
{
    // protected $table = 'foods';

	use SoftDeletes;

    	protected $table = "foods";
    protected $dates = ['deleted_at'];
    
    protected $fillable = ['menu', 'harga', 'gambar'];
}