<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllJob extends Model
{
    /** @use HasFactory<\Database\Factories\AllJobFactory> */
    use HasFactory;

    public static array $exeperience = ['entry', 'intermediate', 'senior'];
    public static array $category = ['IT', 'Finance', 'Sales', 'Marketing'];
}
