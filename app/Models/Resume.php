<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = 'resume';
    protected $casts = [
        'sumary' => 'json',
        'education' => 'json',
        'experience' => 'json'
    ];
}
