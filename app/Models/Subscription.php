<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'coach_id',
        'user_id'
    ];


    public function programs(): BelongsToMany
    {
       return $this->belongsToMany(Program::class);
    }
}
