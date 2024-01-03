<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::all();
        return view('vouchers', compact('vouchers'));
    }

    public function show()
    {
        $vouchers = Voucher::all();
        return view('voucher-index', compact('vouchers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'expired_at' => 'required|date|after:today',
        ]);

        $voucher = Voucher::create([
            'code' => uniqid(),
            'expired_at' => $request->input('expired_at'),
        ]);

        return back()->with('status', 'Voucher created successfully.');
    }
}
