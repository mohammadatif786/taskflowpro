<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Task;

class Tasks_assignments extends Model
{
    use HasFactory;

    protected $table = 'tasks_assignment';

    protected $fillable = ['user_id','task_id'];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function tasks()
    {
        return $this->belongsTo(Task::class,'task_id','id');
    }
}
