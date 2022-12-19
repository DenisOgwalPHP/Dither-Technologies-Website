<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}