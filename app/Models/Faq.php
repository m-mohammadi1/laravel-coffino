<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    const PAGINATE_COUNT = 10;

    protected $fillable = ['title', 'description'];

}
