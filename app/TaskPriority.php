<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaskPriority
 * @package App
 *
 * @property integer id
 * @property string type
 */
class TaskPriority extends Model
{
    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
