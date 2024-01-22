<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    /**
     * Первичный ключ таблицы БД.
     *
     * @var string
     */

     protected $primaryKey = 'id';


    protected $fillable = ['name_task',
	'project_id',
	'task_topic_id',
	'task_group_id',
	'subgroup_tasks_id',
	'owner_id',
	'responsible_id',
	'status_task',
    ];



}
