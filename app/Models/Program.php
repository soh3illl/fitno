<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'coach_id'
    ];


    public function subscription() {
        return $this->belongsToMany(Subscription::class);
    }

}
