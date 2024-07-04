<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Award;
use App\Models\Rockband;
use App\Models\User;

class vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'vote_award',
        'id_award',
        'id_rockband',
        'id_user',
    ];

    public function award()
    {
        return $this->belongsTo(Award::class, 'award_id');
    }

    public function rockband()
    {
        return $this->belongsTo(Rockband::class, 'rockband_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
