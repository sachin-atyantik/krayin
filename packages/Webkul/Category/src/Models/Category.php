<?php

namespace Webkul\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Category\Contracts\Category as CategoryContract;

class Category extends Model implements CategoryContract
{
    protected $fillable = [
        'parent_id',
        'title',
        'description',
        'status'
    ];

}
