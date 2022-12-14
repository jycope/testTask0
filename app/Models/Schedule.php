<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo'];

    public function tasks()
    {
        return $this->hasMany(__NAMESPACE__ . '\ScheduleTask');
    }
}
