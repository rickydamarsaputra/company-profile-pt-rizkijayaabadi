<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $table = 'tracking';
    protected $primaryKey = 'no_surat_jalan';
    public $incrementing = false;
    protected $guarded = [];
}
