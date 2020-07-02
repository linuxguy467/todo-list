<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App
 *
 * @property integer id
 * @property integer user_id
 * @property string title
 * @property string description
 * @property boolean status
 * @property string completed_at
 * @property string updated_at
 * @property string deleted_at
 */
class Task extends Model
{
    //protected $fillable = ['title', 'description', 'user_id'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task_priorities()
    {
        return $this->belongsToMany(TaskPriority::class);
    }
}
