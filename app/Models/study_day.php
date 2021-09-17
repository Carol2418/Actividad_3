<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class study_day extends Model
{
    use HasFactory;
    protected $table = 'study_day';
    protected $primaryKey = 'id';
    protected $fillable=[
        'name',
        'date',
        'file_program_id'

];
    public function file()
    {
        return $this->belongsTo('App\Models\fileprogram','file_program_id');
    }

}
