<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'roll',
        'gender',
        'age',
        'district',
        'country',
        'phone',
        'email',
        'image',
        'created_by',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
