<?php

namespace Master\Rooms\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ameneties extends Model 
{
  use SoftDeletes;
  protected $table = 'ameneties';
  protected $fillable = [
    'name',
    'slug',
    'icon',
    'status',
    'content'
  ];

  protected $casts = array(
    'content' => 'array'
  );
}
