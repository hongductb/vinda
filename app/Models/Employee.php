<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'position',
        'salary',
        'department',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }

        if ($filters['position'] ?? false) {
            $query->where('position', request('position'));
        }

        if ($filters['department'] ?? false) {
            $query->where('department', request('department'));
        }
    }
}