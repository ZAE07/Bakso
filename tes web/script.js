document.getElementById('laporanForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Ambil nilai dari formulir
    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const laporan = document.getElementById('laporan').value;

    // Validasi sederhana
    if(nama && email && laporan) {
        // Tampilkan pesan sukses
        document.getElementById('successMessage').style.display = 'block';

        // Reset form
        document.getElementById('laporanForm').reset();
    } else {
        alert("Semua kolom harus diisi!");
    }
});document.getElementById('laporanForm').addEventListener('submit', function() {
    document.getElementById('successMessage').style.display = 'block';
});