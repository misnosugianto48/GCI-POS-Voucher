
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCI POS Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5">
            <div class="card">
                <div class="card-header">
                  Buat Voucher
                </div>
                <div class="card-body">
                    @if(session('status'))
                    @endif
                    <div class="text-primary">{{ session('status') }}</div>
                            <form action="/vouchers" method="post" class="form-control">
                                @csrf
                                <div class="mb-3">
                                    <label for="expired_at">Kadaluarsa</label>
                                    <input class="form-control" type="date" name="expired_at" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-outline-success">Create Voucher</button>
                                </div>
                            </form>
                  <a href="/voucher-index" class="btn btn-info mt-3">Lihat Voucher</a>
                  <a href="/transaction" class="btn btn-outline-primary mt-3">Transaksi</a>
                </div>
              </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
