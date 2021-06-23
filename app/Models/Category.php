<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];


    public $columns = ['id', 'description'];
    public $columnsCount = 2;
    public $isPaginated = false;

    public function services()
    {
        return $this->hasMany(Service::class);
    }



}
