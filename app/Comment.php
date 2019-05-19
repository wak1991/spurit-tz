<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['text'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public static function add($fields)
    {
        $comment = new static;
        $comment->fill($fields);
        $comment->save();

        return $comment;
    }

    public function setTaskID($id)
    {
//        if($id == null) {return;}
        $this->task_id = $id;
        $this->save();
    }
}
