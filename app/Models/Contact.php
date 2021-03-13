<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $softDelete = true;
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'full_name',
        'email',
        'tell',
        'topic',
        'note',
        'address',
        'lat',
        'long',
        'facebook_page',
        'path_logo',
        'type',
    ];
}
