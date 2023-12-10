<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function employee_services()
    {
        return $this->hasMany(EmployeeService::class);
    }
}
