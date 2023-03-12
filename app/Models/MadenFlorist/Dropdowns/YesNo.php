<?php

namespace App\Models\MadenFlorist\Dropdowns;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YesNo extends Model
{
    use HasFactory;
    protected $table = 'e_yes_no';
    protected $fillable = ['name_en','name_ar'];
}
