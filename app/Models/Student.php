<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','age','gender','image','track_id'];

    public function tracks()
    {
        return $this->belongsTo(Track::class);
    }
}
