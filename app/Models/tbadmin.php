<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbadmin extends Model
{
    use HasFactory;
    public $table="tbadmin";
	protected $guarded=['id','created_at','updated_at'];
}
