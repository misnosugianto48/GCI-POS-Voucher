<!-- File: resources/views/transactions/invoice.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GCI POS Voucher</title>
    <style>
        /* Gaya CSS untuk faktur */
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Invoice</h2>

    <table>
        <tr>
            <th>Transaction ID</th>
            <td>{{ $transaction->id }}</td>
        </tr>
        <tr>
            <th>Staff</th>
            <td>{{ $staff->name}}</td>
        </tr>
        
        <!-- Informasi Voucher -->
            <tr>
                <th>Voucher Code</th>
                <td>{{ $voucher->code }}</td>
            </tr>
            <tr>
                <th>Voucher Discount</th>
                <td>Rp {{ number_format(10000, 2) }}</td>
            </tr>
            <tr>
              <th>Total Amount (Before Discount)</th>
              <td>Rp {{ number_format($transaction->total_amount + 10000, 2) }}</td>
          </tr>
            <tr>
              <th>Total Bayar</th>
              <td>Rp {{ number_format($transaction->total_amount, 2) }}</td>
          </tr>
        
    </table>
</body>
</html>
