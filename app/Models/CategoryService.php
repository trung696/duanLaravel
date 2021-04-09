<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "category_services";

    public function service()
    {
        return $this->hasMany(Service::class, 'id_cate');
    }
}
