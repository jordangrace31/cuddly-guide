<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public function languages() {
        return $this->hasOne(Language::class);
    }

    public function interests() {
        return $this->hasMany(Interests::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
