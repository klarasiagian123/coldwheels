<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    protected $table = "toys";
    protected $primaryKey = "id";
    protected $fillable = ['item', 'type', 'price', 'img'];
}
