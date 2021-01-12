<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['title','completed','user_id'];  //to make it complusary for entering data and neglacting other field
    
    // public function getRouteKeyName()
    //{
    //  return 'title',          it will pass title instead of id, Dynamic Model routing
    //}
}
