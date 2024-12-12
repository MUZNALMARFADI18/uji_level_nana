<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
</head>
<body>
    <h1>Konfirmasi Pembayaran</h1>
    <p>Terima kasih telah melakukan pembelian. Silakan lanjutkan untuk menyelesaikan pembayaran.</p>
    <form action="{{ route('payment.process') }}" method="POST">
        @csrf
        <button type="submit">Bayar Sekarang</button>
    </form>
</body>
</html>
