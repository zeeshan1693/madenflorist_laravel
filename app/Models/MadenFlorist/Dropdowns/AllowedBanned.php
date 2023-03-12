<?php

namespace App\Models\MadenFlorist\Dropdowns;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllowedBanned extends Model
{
    use HasFactory;
    protected $table = 'e_allowed_banned';
    protected $fillable = ['name_en','name_ar'];
}
