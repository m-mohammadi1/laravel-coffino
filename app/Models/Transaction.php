<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'payment_id',
        'service_count',
        'service_link',
        'paid',
        'status',
        'invoice_details',
        'transaction_id',
        'transaction_result',
    ];


    public const STATUS = [
        'failed' => 0,
        'pending' => 1,
        'success' => 2,
    ];

    public const FILTER_ITEMS = [
        'id' => 'آیدی',
        'paid' => 'مبلغ',
        'service_id' => 'آیدی سرویس',
        'transaction_id' => 'آیدی تراکنش درگاه'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setInvoiceDetailsAttribute($value)
    {
        $this->attributes['invoice_details'] = serialize($value);
    }

    public function getInvoiceDetailsAttribute()
    {
        return unserialize($this->attributes['invoice_details']);
    }

    public function setTransactionResultAttribute($value)
    {
        $this->attributes['transaction_result'] = serialize($value);
    }

    public function getTransactionResultAttribute($value)
    {
        return ($this->attributes['transaction_result']);
    }

    public function getStatusText()
    {
        if ($this->attributes['status'] == $this::STATUS['success']) {
            return "موفق";
        } else if($this->attributes['status'] == $this::STATUS['pending']) {
            return 'در انتظار پرداخت';
        } else if ($this->attributes['status'] == $this::STATUS['failed']) {
            return 'ناموفق';
        }

        return 'نامعلوم';
    }

    public static function getStatusTextByCode($code)
    {
        if ($code == self::STATUS['success']) {
            return "موفق";
        } else if($code == self::STATUS['pending']) {
            return 'در انتظار پرداخت';
        } else if ($code == self::STATUS['failed']) {
            return 'ناموفق';
        }

        return 'نامعلوم';
    }

    public function purchasedService()
    {
        return $this->hasOne(PurchasedService::class);
    }

    public static function getWholeSaleAmount()
    {
        return self::where('status', self::STATUS['success'])->sum('paid');
    }

    public static function getLastWeekSaleAmount()
    {
        $date = Carbon::today()->subDays(7);
        return self::where('created_at', '>=', $date)->where('status', self::STATUS['success'])->sum('paid');
    }

    public static function getTodaySaleAmount()
    {
        $date = Carbon::today();
        return self::where('created_at', '>=', $date)->where('status', self::STATUS['success'])->sum('paid');
    }

}
