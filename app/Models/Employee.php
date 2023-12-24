<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function employee_services()
    {
        return $this->hasMany(EmployeeService::class);
    }
}
