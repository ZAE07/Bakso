<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $laporan = htmlspecialchars($_POST['laporan']);

    // Email tujuan (email pemilik website)
    $to = "kamunanaya18@gmail.com";

    // Subject email
    $subject = "Laporan dari " . $nama;

    // Konten email
    $message = "
    <html>
    <head>
        <title>Laporan dari $nama</title>
    </head>
    <body>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Laporan:</strong><br>$laporan</p>
    </body>
    </html>
    ";

    // Header untuk email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Laporan berhasil dikirim. Terima kasih.');</script>";
    } else {
        echo "<script>alert('Maaf, terjadi kesalahan saat mengirim laporan.');</script>";
    }
}
?>