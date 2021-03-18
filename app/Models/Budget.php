<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Budget extends Model
{
    use SoftDeletes;

    protected $softDelete = true;
    protected $table = 'budgets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'full_name',
        'company',
        'tell',
        'budget',
        'note',
    ];
}
