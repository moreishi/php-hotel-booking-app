<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function Rooms()
    {
        return $this->belongsToMany(Room::class);
    }
}
