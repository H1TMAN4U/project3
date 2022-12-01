<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    public $incrementing = true;
}
