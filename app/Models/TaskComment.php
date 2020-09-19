<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskComment extends Model
{
    protected $table = 'task_comments';

    public function task() {
        return $this->belongsTo('App\Models\Task', 'task_id');
    }
}
