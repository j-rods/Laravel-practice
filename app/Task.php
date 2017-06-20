<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function scopeIncomplete($query) // Task::incomplte

    {
      return $query->where('completed', 0); //wrapper around a particular query
    }

}
