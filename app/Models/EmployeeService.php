<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeService extends Model
{
    use HasFactory;
    protected $table = 'employee_service';
    public $timestamps = false;
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'service_id');
    }
}
