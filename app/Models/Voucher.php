<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'transaction_id', 'expired_at'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
