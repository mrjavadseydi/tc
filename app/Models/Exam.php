<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function enrol(){
        return $this->hasMany(Enrol::class,'exam_id');
    }
}
