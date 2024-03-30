<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'assigned_to',
        'assigned_by'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'assigned_by');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
