<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Menjadikan tampilan responsif di berbagai ukuran layar -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery dan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function hello() {
            alert("Hello World");
        }

        function tambah() {
            // Ambil dan konversi input jadi angka
            let bil1 = document.getElementById("bil1").value;
            let bil2 = document.getElementById("bil2").value;

            let hasil = parseFloat(bil1) + parseFloat(bil2);

            // Tampilkan hasil
            document.getElementById("hasil").innerText = hasil;
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <button type="button" class="btn btn-primary mb-3" onclick="hello()">Klik Disini</button>

        <h3>Kalkulator</h3>
        <div class="form-group">
            <label for="bil1">Bilangan 1:</label>
            <input type="text" id="bil1" class="form-control" value="0">
        </div>
        <div class="form-group">
            <label for="bil2">Bilangan 2:</label>
            <input type="text" id="bil2" class="form-control" value="0">
        </div>

        <div class="form-group">
            <label>Hasil:</label>
            <div id="hasil" class="font-weight-bold"></div>
        </div>

        <button type="button" class="btn btn-success" onclick="tambah()" ondragenter="tambah()">Tambah</button>
    </div>
</body>
</html>
