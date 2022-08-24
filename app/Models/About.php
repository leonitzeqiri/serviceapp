<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = "abouts";

    public function Position()
    {
        return $this->belongsTo('App\Models\Position', 'position_id', 'id');
    }

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('$position->position', 'like', '%' . request('search') . '%');
        }
    }
}
