<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';

    public function user() {
        return $this->belongsTo('App\Models\User', 'owner');
    }

    public function comments() {
        return $this->hasMany('App\Models\TaskComment', 'task_id');
    }
}
