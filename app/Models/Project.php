<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // поля доступные для изменения
    protected $fillable = ['project',
	'short_name_project',
	'description_project',
    ];
}
