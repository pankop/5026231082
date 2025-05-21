<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ini nanti dijelaskan yaa, biar tahu -->
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function validation(){
            // return true\

            nrp = document.getElementById("nrp").value ;
            nama = document.getElementById("nama").value;

            if (nrp.length == 0) {
                Swal.fire({
                    title: "Kesalahan input",
                    text: "NRP tidak boleh kosong",
                    icon: "error"
                });
                return false;
            }

            if (nama.length < 2) {
                Swal.fire({
                    title: "Kesalahan input",
                    text: "Nama harus lebih dari 2 huruf",
                    icon: "error"
                });
                return false
            }

            if (/\d/.test(nama)) {
                Swal.fire({
                    title: "Kesalahan input",
                    text:  "Nama tidak boleh mengandung angka!",
                    icon: "error"
                });
                return false
            }
            if (nama.length == 0 ) {
                Swal.fire({
                    title: "Kesalahan input",
                    text: "Nama tidak boleh kosong",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <!-- return true nanti action dijalankan, namun ketika false dia akan ttp stay   -->
        <form action="https://www.instagram.com/is_expo/" method="get" onsubmit="return validation()">
            <h3>Form Pendaftaran</h3>
            Nama :
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Siapa namamu?">

            NRP :
            <input type="text" id="nrp" class="form-control" name="nrp" placeholder="Berapa NRP, 10 digit angka">

            <input type="submit" class="btn btn-success mt-3">
        </form>
    </div>
</body>
</html>
