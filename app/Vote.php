<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
      protected $fillable = ['idea_id', 'status', 'user_id'];
}
