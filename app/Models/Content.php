<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use SoftDeletes;
    protected $softDelete = true;
    protected $table = 'contents';
    protected $primaryKey = 'id';
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keyword',
        'title',
        'content',
        'page_type',
        'path_img_banner',
        'path_img',
        'name',
        'detail',
    ];
}
