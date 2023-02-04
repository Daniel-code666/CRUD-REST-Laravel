<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subarticle extends Model
{
    use HasFactory;
    protected $table = 'subarticle';
    protected $primaryKey = 'subart_id';
}
