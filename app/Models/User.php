<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function videos() {
        return $this->hasMany(Video::class,'user_id', 'id');
    }

}
