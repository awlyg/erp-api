<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'user';

    public function tasks() {
        return $this->hasMany('App\Models\Task', 'id', 'owner');
    }
}
