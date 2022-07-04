<!DOCTYPE html>
<html>
   <head>
        <title>20081010165 - Praktikum3</title>

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- JS -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    </head>
<body>
    <!-- CONTENT -->
    <!-- MENU -->
    <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Praktikum3</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="soal1.php" class="nav-item nav-link">Soal 1</a>
                    <a href="soal2.php" class="nav-item nav-link">Soal 2</a>
                    <a href="soal3.php" class="nav-item nav-link">Soal 3</a>
                </div>
            </div>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <!-- CONTENT -->
        <!-- CARD -->
        <div class="list-group">
            <a href="soal1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Menampilkan Hari dan Bulan dengan PHP</h5>
                <small>PHP</small>
                </div>
                <small>IF-ELSE/SWITCH-CASE.</small>
            </a>
            <a href="soal2.php" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Membuat Segitiga Menggunakan PHP</h5>
                <small>PHP</small>
                </div>
                <small>FOR/WHILE/DO-WHILE.</small>
            </a>
            <a href="soal3.php" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Menampilkan List Array Menggunakan PHP</h5>
                <small>PHP</small>
                </div>
                <small>ARRAY.</small>
            </a>
        </div>
    </div>
</body>
</html>