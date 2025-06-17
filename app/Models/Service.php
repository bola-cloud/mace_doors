<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\FAQ;
class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'en_name_service', 'ar_name_service',
        'icon', 'tag',
        'en_small_desc', 'en_desc_1', 'en_desc_2', 'en_desc_3',
        'ar_small_desc', 'ar_desc_1', 'ar_desc_2', 'ar_desc_3',
    ];
    public function types()
    {
        return $this->hasMany(Type::class);
    }
    public function faqs()
    {
        return $this->hasMany(FAQ::class);
    }
}
