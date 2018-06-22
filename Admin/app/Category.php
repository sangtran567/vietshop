<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'modifiedAt';
}
