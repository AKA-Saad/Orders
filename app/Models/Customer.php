<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customerNumber';

    public function orders()
    {
        return $this->hasMany(Order::class, 'customerNumber');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'customerNumber');
    }
}
