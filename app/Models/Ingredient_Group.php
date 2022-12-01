<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient_Group extends Model
{
    protected $table = 'ingredient_group';
    protected $primaryKey = 'id';
    public $incrementing = true;
    use HasFactory;
}
