<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\Spa;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'id_destination');
    }

    public function spas()
    {
        return $this->hasMany(Spa::class, 'id_destination');
    }
}
