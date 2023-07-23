<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'career_id',
        'teacher_id',
        'removed'
    ];

    public function career(){
        return $this->belongsTo(Career::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
