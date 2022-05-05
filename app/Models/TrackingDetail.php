<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingDetail extends Model
{
    use HasFactory;
    protected $table = 'tracking_detail';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
