<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Award;
use App\Models\Rockband;
use App\Models\User;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'award_id',
        'rockband_id',
        'user_id',
    ];

    public function award()
    {
        return $this->belongsTo(Award::class);
    }

    public function rockband()
    {
        return $this->belongsTo(Rockband::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
