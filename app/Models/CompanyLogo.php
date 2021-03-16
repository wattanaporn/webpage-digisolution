<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyLogo extends Model
{
    use SoftDeletes;

    protected $softDelete = true;
    protected $table = 'company_logos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'path_img',
        'company_name',
    ];
}
