<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 */
class Invoice extends Model
{
    use \AlgoWeb\PODataLaravel\Models\MetadataTrait;
    protected $table = 'invoices';

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'invoice_date',
        'due_date',
        'tax',
        'shipping',
        'amount_due'
    ];

    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
