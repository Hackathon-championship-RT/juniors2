<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameStory extends Model
{
    protected $fillable=['placement', 'user_id', 'time'];
}
