<!-- File: create_transaction.blade.php -->

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
        <div class="card-header text-center">Tambah Transaksi</div>
        <form action="/transaction" method="post" id="transactionForm" class="form-control">
          @csrf
          <div class="mb-3">
            @if(session('status'))
            <div class="text-info">{{ session('status') }}</div>
        @endif
            <label for="staff" class="form-label">Pilih Namamu</label>
            <select name="staff" id="staff" class="form-control">
              <option value="" selected>Pilih staff saat ini</option>
                @foreach ($staffs as $staff)
                    <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="total_amount" class="form-label">Total Harga</label>
            <input type="number" name="total_amount" id="totalAmount" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="voucher" id="voucherLabel" class="form-label">Pilih Voucher (Jika Ada) </label>
            <select name="voucher" id="voucher" class="form-control"  style="display: none;">
                <option value>No Voucher</option>
                @foreach ($vouchers as $voucher)
                    <option value="{{ $voucher->id }}">{{ $voucher->code }}</option>
                @endforeach
            </select>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-outline-success">Tambah Transaksi</button>
          </div>
      </form>
      <div class="mb-3 mt-3">
        <a href="/transactions-index" class="btn btn-primary">Lihat Transaksi</a>
        <a href="/vouchers" class="btn btn-outline-info">Buat Voucher</a>
      </div>
      </div>
    </div>
  </div>
</div>
    <script>
        // Fungsi untuk menampilkan atau menyembunyikan dropdown voucher
        function toggleVoucherDropdown() {
            var totalAmount = document.getElementById('totalAmount').value;
            var voucherLabel = document.getElementById('voucherLabel');
            var voucherDropdown = document.getElementById('voucher');

            if (totalAmount >= 2000000) {
                // voucherLabel.style.display = 'block';
                voucherDropdown.style.display = 'block';
            } else {
                // voucherLabel.style.display = 'none';
                voucherDropdown.style.display = 'none';
            }
        }

        // Menambahkan event listener untuk memanggil fungsi saat nilai totalAmount berubah
        document.getElementById('totalAmount').addEventListener('input', toggleVoucherDropdown);

        // Memanggil fungsi saat halaman dimuat untuk menetapkan keadaan awal
        toggleVoucherDropdown();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
