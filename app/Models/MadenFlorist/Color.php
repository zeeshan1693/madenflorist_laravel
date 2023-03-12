<?php

namespace App\Models\MadenFlorist;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table = 'p_colors';
    protected $fillable = ['name_en','name_ar','hex_code'];
    public $timestamps = false;
}
