<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'user_id'];

    public const FILTER_ITEMS = [
        'id' => 'آیدی',
        'value' => 'متن',
        'user_id' => 'آیدی کاربر'
    ];

    public function getCommentText()
    {
        $text = Str::of($this->attributes['value'])->substr(0, 70);

        return $text;
    }


    const STATUS = [
        'unconfirmed' => 0,
        'confirmed' => 1,
    ];

    public static function getStatusTextByCode($code)
    {
        $text = 'نامعلوم';
        if ($code == self::STATUS['unconfirmed']) {
            $text = 'تایید نشده';
        } elseif ($code == self::STATUS['confirmed']) {
            $text = 'تایید شده';
        }
        return $text;
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
