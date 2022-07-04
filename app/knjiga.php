<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class knjiga extends Model
{
    public static function search($keyword) {
        return static::where('naslov', 'LIKE', '%'.$keyword.'%')->paginate(10);
    }
}
