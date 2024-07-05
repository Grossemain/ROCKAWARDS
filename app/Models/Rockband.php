<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vote;
use App\Models\Award;
use App\Models\User;

class rockband extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'name_rockband',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function awards()
    {
        return $this->belongsToMany(Award::class, 'rockband_award');
    }

}
