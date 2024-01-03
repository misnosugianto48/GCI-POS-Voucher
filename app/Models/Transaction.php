<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['staff_id', 'total_amount'];

    public function customer()
    {
        return $this->belongsTo(Staff::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }
}
