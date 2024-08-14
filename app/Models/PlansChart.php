<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlansChart extends Model
{
    use HasFactory;
    protected $table = "plans_chart";
    protected $primaryKey = "id";
}
