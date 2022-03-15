<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'year',
        'img_url',
        'password',
        'hint',
        'hint_url'
    ];

    public $timestamps = false;

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
