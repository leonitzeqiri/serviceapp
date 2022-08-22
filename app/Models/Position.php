<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = "positions";

    public function About() {
        return $this->hasMany('App\Models\About', 'about_id', 'id');
    }
}
