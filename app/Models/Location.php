<?php

namespace App\Models;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function task()
    {
    	return $this->hasMany('App/Task');
    }
}
