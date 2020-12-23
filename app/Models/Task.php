<?php

namespace App\Models;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

}
