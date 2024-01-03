<!-- File: resources/views/transactions/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GCI POS Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5">
                <table class="table table-bordered table-hover table-striped">
                    <h2>Transaksi</h2>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Staff ID</th>
                            <th>Total Amount</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->staff_id }}</td>
                                <td>{{ $transaction->total_amount }}</td>
                                <td>{{ $transaction->created_at }}</td>
                                <td>
                                    <a href="/transactions/{{$transaction->id}}/print" target="_blank" class="btn btn-info">Print</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mb-3">
                    <a href="/transaction" class="btn btn-warning">Buat Transaksi</a>
                </div>
            </div>
        </div>
    </div>
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
