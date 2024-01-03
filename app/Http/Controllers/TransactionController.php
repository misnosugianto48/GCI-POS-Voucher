<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Transaction;
use App\Models\Voucher;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show()
    {
        $staffs = Staff::all();
        $vouchers = Voucher::where('transaction_id', null)->get();
        $totalBelanja = Transaction::sum('total_amount');

        return view('transaction', compact('staffs', 'vouchers', 'totalBelanja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'staff' => 'required|exists:staff,id',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $totalAmount = $request->input('total_amount');
        $voucherId = $request->input('voucher');
        $potonganHarga = ($voucherId) ? 10000 : 0;

        if ($totalAmount >= 2000000) {
            $totalAmount -= $potonganHarga;
        }

        $transaction = Transaction::create([
            'staff_id' => $request->input('staff'),
            'total_amount' => $totalAmount,
        ]);

        if ($voucherId) {
            Voucher::where('id', $voucherId)->update(['transaction_id' => $transaction->id]);
        }

        return back()->with('status', 'Transaksi berhasil ditambah');
    }

    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction-index', compact('transactions'));
    }

    public function printInvoice($id)
    {
        $transaction = Transaction::findOrFail($id);
        $staff = Staff::where('id', $transaction->staff_id)->first();
        $voucher = Voucher::where('transaction_id', $transaction->id)->first();
        $pdf = app('dompdf.wrapper')->loadView('invoice', compact('transaction',  'staff', 'voucher'));

        return $pdf->stream('invoice.pdf');
    }
}
