<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];
}
