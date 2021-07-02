<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function counts()
    {
        return $this->belongsToMany(Count::class);
    }

    public static function getServiceAmountAverage()
    {
        return self::avg('price');
    }

}
