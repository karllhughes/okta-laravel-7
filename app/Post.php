<?php

namespace App;

use App\Casts\PublicId;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $casts = [
        'id' => PublicId::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
