<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Room extends Model
{
    public function floor() {
        return $this->belongsTo(Floor::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

}
