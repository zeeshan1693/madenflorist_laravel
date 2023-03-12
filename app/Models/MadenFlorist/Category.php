<?php

namespace App\Models\MadenFlorist;

use Illuminate\Database\Eloquent\Model;
use App\Models\MadenFlorist\Dropdowns\YesNo;
use App\Models\MadenFlorist\Dropdowns\AllowedBanned;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'p_categories';
    protected $fillable = ['name_en','name_ar','consider_as_separate','status'];
    public $timestamps = false;

    public function yes_no()
    {
        return $this->belongsTo(YesNo::class, 'consider_as_separate');
    } 

    public function allowed_banned()
    {
        return $this->belongsTo(AllowedBanned::class, 'status');
    } 
}
