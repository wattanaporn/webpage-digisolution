<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurClient extends Model
{
    use SoftDeletes;

    protected $softDelete = true;
    protected $table = 'our_clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'service_list_id',
        'name',
        'link',
        'path_img_small',
        'path_img_large',
    ];
}
