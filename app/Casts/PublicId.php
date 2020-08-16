<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Str;

class PublicId implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return Str::of($value)->prepend('l7-')->append('-ok');
    }

    public function set($model, $key, $value, $attributes)
    {
        return Str::of($value)->after('l7-')->before('-ok');
    }
}
