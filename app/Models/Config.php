<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'config';
    public function  user(){
        return $this->belongsTo(User::class , 'user_id','id');

    }
}
