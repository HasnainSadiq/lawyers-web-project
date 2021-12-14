<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject', 'description','Fee', 'status', 'payment',  'appointment_timing',
    ];
    
  
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
