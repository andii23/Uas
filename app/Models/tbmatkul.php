<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbmatkul extends Model
{
    use HasFactory;
    public $table="tbmatkul";
	protected $guarded=['id','created_at','updated_at'];
}
