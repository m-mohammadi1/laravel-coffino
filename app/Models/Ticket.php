<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'body', 'status', 'category', 'asked_user_id', 'responded_user_id'
    ];




    public const CATEGORY = [
        'sale' => 0,
        'technical' => 1,
    ];

    public function getCategoryText()
    {
        return self::getCategoryTextByCode($this->attributes['category']);
    }

    public static function getCategoryTextAndCode()
    {
        $cats = [];
        foreach (self::CATEGORY as $text => $cat_code) {
            $cats[$cat_code] = self::getCategoryTextByCode($cat_code);
        }
        return $cats;
    }



    public function asked_user()
    {
        return $this->belongsTo(User::class, 'asked_user_id');
    }

    public function responded_user()
    {
        return $this->belongsTo(User::class, 'responded_user_id');
    }

    public function messages()
    {
        return $this->hasMany(TicketMessage::class);
    }

    public static function getCategoryTextByCode($code): string
    {
        $text = '';
        if ($code == self::CATEGORY['sale']) {
            $text = 'بخش فروش';
        } elseif ($code == self::CATEGORY['technical']) {
            $text = 'بخش فنی';
        } else {
            $text = 'عمومی';
        }
        return $text;
    }


}
