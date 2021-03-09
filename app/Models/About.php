<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use SoftDeletes;
    protected $softDelete = true;
    protected $table = 'abouts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'keyword',
        'head',
        'content',
        'path_img_banner',
    ];
}
