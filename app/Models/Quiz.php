<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'minutes',
    ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
