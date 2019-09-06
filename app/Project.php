<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Project extends Model
{
    // protected $guard = [];
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}


