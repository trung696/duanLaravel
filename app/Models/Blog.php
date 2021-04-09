<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table = 'blogs';
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function category()
    {
        return $this->belongsTo(CategoryNew::class, 'id_cate');
    }
}
