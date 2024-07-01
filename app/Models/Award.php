<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rockband;
use App\Models\Vote;

class award extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'name_award',
    ];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function rockbands()
    {
        return $this->belongsToMany(Rockband::class, 'rockband_award', 'id_award','id_rockband');
    }

}
