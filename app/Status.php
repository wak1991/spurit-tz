<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public static function getStatusId($name)
    {
        return self::where('title', $name)->first()->id;
    }
}
