<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    use HasFactory;
    protected $table = 'apprentice';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fullname',
        'N_document',
        'email',
        'phone',
        'age',
        'address',
        'classroom_leader'

    ];
}
