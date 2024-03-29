<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'service_count',
        'service_link',
        'user_id',
        'status',
        'transaction_id',
    ];

    public const FILTER_ITEMS = [
        'id' => 'آیدی',
        'user_id' => 'آیدی کاربر',
        'service_id' => 'آیدی سرویس',
        'service_link' => 'لینک درخواستی'
    ];


    public const STATUS = [
        'rejected' => 0,
        'pending' => 1,
        'progress' => 2,
        'completed' => 3
    ];


    public function service()
    {
        return $this->hasOne(Service::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusText()
    {
        $text = 'نامعلوم';
        if ($this->attributes['status'] == self::STATUS['rejected']) {
            $text = 'بازگشت داده شده';
        } else if ($this->attributes['status'] == self::STATUS['pending']) {
            $text = 'در انتظار بررسی';
        } else if ($this->attributes['status'] == self::STATUS['progress']) {
            $text = 'در حال پردازش';
        } else if ($this->attributes['status'] == self::STATUS['completed']) {
            $text = 'تکمیل شده';
        }
        return $text;
    }

    public static function getStatusTextByCode($code)
    {
        $text = 'نامعلوم';
        if ($code == self::STATUS['rejected']) {
            $text = 'بازگشت داده شده';
        } else if ($code == self::STATUS['pending']) {
            $text = 'در انتظار بررسی';
        } else if ($code == self::STATUS['progress']) {
            $text = 'در حال پردازش';
        } else if ($code == self::STATUS['completed']) {
            $text = 'تکمیل شده';
        }
        return $text;
    }

    public static function getStatusArray()
    {
        return [
            'rejected' => [
                'code' => self::STATUS['rejected'],
                'text' => self::getStatusTextByCode(self::STATUS['rejected']),
            ],
            'pending' => [
                'code' => self::STATUS['pending'],
                'text' => self::getStatusTextByCode(self::STATUS['pending']),
            ],
            'progress' => [
                'code' => self::STATUS['progress'],
                'text' => self::getStatusTextByCode(self::STATUS['progress']),
            ],
            'completed' => [
                'code' => self::STATUS['completed'],
                'text' => self::getStatusTextByCode(self::STATUS['completed']),
            ]
        ];

    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

}
