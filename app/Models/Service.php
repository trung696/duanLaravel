<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
//     protected $table = "categories";
    protected $guarded =[];
    public function category()
    {
        return $this->belongsTo(CategoryService::class, 'id_cate');
    }
}
