<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class imagsessions extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'user_id'];

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class, 'session_id', 'id', 'sessionimages');
    }
}
