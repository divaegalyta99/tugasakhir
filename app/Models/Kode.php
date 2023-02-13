<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    use HasFactory;


    public function user() {
        return $this->belongsto(User::class);
    }

    

    protected $table = 'kodes';
}
