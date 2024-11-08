<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    // Define the table if it's not using the default plural form
    protected $table = 'todos';

    // Specify the fillable attributes to allow mass assignment
    protected $fillable = [
        'title',
        'task',
        'date',
        'priority',
        'category',
        'user_id',
    ];
}