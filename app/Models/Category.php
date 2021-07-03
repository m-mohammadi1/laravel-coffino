<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public const FILTER_ITEMS = [
        'id' => 'آیدی',
        'title' => 'عنوان',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }



}
