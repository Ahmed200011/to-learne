<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanics extends Model
{
    public function User()
    {
        return $this->hasOneThrough(User::class, Car::class, 'mechanic_id', 'car_id', localKey: 'id', secondLocalKey: 'id');
    }
}
