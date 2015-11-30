<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGoal extends Model
{
    protected $fillable = ['user_id', 'heat', 'distance', 'step', 'weight'];
}
