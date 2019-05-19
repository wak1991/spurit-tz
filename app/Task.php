<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function add($fields)
    {
        $task = new static;
        $task->fill($fields);
        $task->save();

        return $task;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function setStatus($id)
    {
        if($id == null) {return;}
        $this->status_id = $id;
        $this->save();
    }

    public function getStatusId()
    {
        return $this->status != null ? $this->status->id : null;
    }

}
