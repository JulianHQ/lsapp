<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // Table name in the database
  protected $table = 'posts';

  // Primary key
  public $primaryKey = 'id';

  // Timestamps (created_at & updated_at)
  public $timestamps = true;
}
