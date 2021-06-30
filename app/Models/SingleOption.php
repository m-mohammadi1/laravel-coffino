<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleOption extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'value'];


    public static function getAllOptions()
    {
        $site_options = self::all(['name', 'value']);
        $result_arr = [];
        foreach ($site_options as $option) {
            $result_arr[$option->name] = $option->value;
        }

        return $result_arr;
    }
}
