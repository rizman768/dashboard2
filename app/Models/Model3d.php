<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model3d extends Model
{
    use HasFactory;

    protected $table = 'model3d';

    protected $fillable = [
    	'id',
        'link',
        'model3d',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
