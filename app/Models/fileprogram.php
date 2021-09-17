<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\apprentice;

class fileprogram extends Model
{
    use HasFactory;
    protected $table = 'file_program';
    protected $primarykey= 'id';
    protected $fillable =[
        'name',
        'name_teacher',
        'classroom',
        'students_numbers',
        'apprentice_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\apprentice','apprentice_id');
    }
}
