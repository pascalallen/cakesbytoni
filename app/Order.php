<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Notifiable;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'due_date', 'product', 'instructions'];
}
