<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'payment_type';
    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'payment_type_id', 'payment_type_id');
    }
    use HasFactory;
}
