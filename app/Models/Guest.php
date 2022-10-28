<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table      = 'guest_books';
    public    $hidden     = ['id'];
    public    $guarded    = [];
    public    $timestamps = true;

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    // public function getCommentAttribute($value)
    // {
    //     return nl2br($value);
    // }
}
