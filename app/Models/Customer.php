<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as EloquentUser;

class Customer extends EloquentUser implements Authenticatable
{
    protected $table = "customers";
    public $timestamps = false;
    protected $primaryKey = 'customer_id'; // Assuming 'customer_id' is the primary key
    public $incrementing = false; // Assuming 'customer_id' is not an auto-incrementing column

    protected $fillable = [
        'customer_id', 'customer_name', 'password', 'email',
        'customer_phone', 'customer_role', 'customer_address', 'customer_img',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Specify the custom column name for the password
    public function getAuthPassword()
    {
        return $this->password;
    }

    // Specify the custom column name for the identifier
    public function getAuthIdentifierName()
    {
        return 'email';
    }

    // Retrieve the custom identifier value
    public function getAuthIdentifier()
    {
        return $this->attributes[$this->getAuthIdentifierName()];
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
