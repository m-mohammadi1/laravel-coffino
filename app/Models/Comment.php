<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'user_id'];


    public function getCommentText()
    {

        $text = Str::of($this->attributes['value'])->substr(0, 70);

        return $text;



    }


    const STATUS = [
        'unconfirmed' => 0,
        'confirmed' => 1,
    ];

    public function getStatusTextByCode($code)
    {

    }

    public function getStatusText()
    {
        $text = 'نامعلوم';
        if ($this->status == self::STATUS['unconfirmed']) {
            $text = 'تایید نشده';
        } elseif ($this->status == self::STATUS['confirmed']) {
            $text = 'تایید شده';
        }
        return $text;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
