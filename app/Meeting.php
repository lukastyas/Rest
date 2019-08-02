<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Meeting extends Model
{
    //atribute vilable
    protected $fillable = ['title', 'description', 'time'];
    public function users()
    {
        return $this->belongsToMany(User::class); 
    }
}
