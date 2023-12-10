<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppStatus extends Model
{
     use HasFactory;

     protected $table = 'appstatus';

     protected $primaryKey = 'appstatus_id';

     public function appointments()
     {
          return $this->hasMany(Appointment::class);
     }
}
