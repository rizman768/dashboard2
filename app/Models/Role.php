<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    protected $fillable = [
    	'id',
        'level',
    ];

    public function user(){
        return $this->hasMany(User::class,'id','role_id');
    }

    public function iframe(){
        return $this->belongsToMany(Iframe::class);
    }
}
