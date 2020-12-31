<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbmahasiswa extends Model
{
    use HasFactory;
    public $table="tbmahasiswa";
	protected $guarded=['id','created_at','updated_at'];
}
