<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App
 *
 * @property integer id
 * @property string title
 * @property string description
 * @property boolean status
 * @property string completed_at
 * @property string updated_at
 * @property string deleted_at
 */
class Task extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function priorities()
    {
        return $this->belongsToMany(TaskPriority::class);
    }
}
