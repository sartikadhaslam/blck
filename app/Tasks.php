<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tasks extends Model
{
    use Notifiable;

    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task', 'priority', 'status', 'start_date', 'due_date', 'notes'
    ];
}
