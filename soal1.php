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
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="soal1.php" class="nav-item nav-link active">Soal 1</a>
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
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a href="#soal1a" class="nav-link active" data-bs-toggle="tab">1A - (IF-ELSE)</a>
                    </li>
                    <li class="nav-item">
                        <a href="#soal1b" class="nav-link" data-bs-toggle="tab">1B - (SWITCH-CASE)</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="soal1a">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 1A - hari (IF-ELSE)</h5>
                        <p class="card-text">Buat kode PHP berbasis IF-ELSE untuk menampilkan nama hari dalam bahasa indonesia saat diisikan angka urutan harinya. Dimana, 1 = senin, 2 = selasa, 3 = rabu, 4=kamis, 5 = jumat, 6 = sabtu, dan minggu =7.</p>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <form method="post">
                                <div class="form-group">
                                    <label>Input Angka: </label>
                                    <input type="number" class="form-control"  name="a">
                                </div>
                                <br>

                                <?php if(isset($_POST['submit']))
                                {
                                    $a = $_POST['a'];
                                    
                                    if ($a == 1){
                                        echo "Senin";
                                        echo "<br>";
                                        echo "<div class='alert alert-info'>Anda memilih hari Senin</div>";
                                    } else if ($a == 2) {
                                        echo "Selasa";
                                        echo "<br>";
                                        echo "<div class='alert alert-info'>Anda memilih hari Selasa</div>";
                                    } else if ($a == 3) {
                                        echo "Rabu";
                                        echo "<br>";
                                        echo "<div class='alert alert-info'>Anda memilih hari Rabu</div>";
                                    } else if ($a == 4) {
                                        echo "Kamis";
                                        echo "<br>";
                                        echo "<div class='alert alert-info'>Anda memilih hari Kamis</div>";
                                    } else if ($a == 5) {
                                        echo "Jum'at";
                                        echo "<br>";
                                        echo "<div class='alert alert-info'>Anda memilih hari Jum'at</div>";
                                    } else if ($a == 6) {
                                        echo "Sabtu";
                                        echo "<br>";
                                        echo "<div class='alert alert-info'>Anda memilih hari Sabtu</div>";
                                    } else if ($a == 7) {
                                        echo "Minggu";
                                        echo "<br>";
                                        echo "<div class='alert alert-info'>Anda memilih hari Minggu</div>";
                                    } else {
                                        echo "<div class='alert alert-info'>Anda salah memberi input!<br>Silahkan coba lagi</div>";
                                    }
                                }
                                ?>
                                <button type="submit" class="btn btn-primary btn-sm btn-block" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="soal1b">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 1B - bulan (SWITCH-CASE)</h5>
                        <p class="card-text">Buat kode PHP berbasis SWITCH-CASE untuk menampilkan nama bulan dalam bahasa indonesia saat diisikan angka urutan harinya. Dimana,1 = Januari, 2 = Februari, 3 = Maret, 4=April, 5 = Mei, 6 = Juni, 7 = Juli, 8 = Agustus, 9 = September, 10=Oktober, 11 = Nopember, 12 = Desember.</p>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <form method="post">
                                <div class="form-group">
                                    <label>Input Angka: </label>
                                    <input type="number" class="form-control" name="b">
                                </div>
                                <br>

                                <?php if(isset($_POST['submitdata']))
                                {
                                    $b = $_POST['b'];

                                    switch($b){
                                        case 1:
                                            echo "Januari</div>";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Januari</div>";
                                        break;
                                        case 2:
                                            echo "Februari";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Februari</div>";
                                        break;
                                        case 3:
                                            echo "Maret";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Maret</div>";
                                        break;
                                        case 4:
                                            echo "April";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan April</div>";
                                        break;
                                        case 5:
                                            echo "Mei";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Mei</div>";
                                        break;
                                        case 6:
                                            echo "Juni";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Juni</div>";
                                        break;
                                        case 7:
                                            echo "Juli";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Juli</div>";
                                        break;
                                        case 8:
                                            echo "Agustus";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Agustus</div>";
                                        break;
                                        case 9:
                                            echo "September";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan September</div>";
                                        break;
                                        case 10:
                                            echo "Oktober";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Oktober</div>";
                                        break;
                                        case 11:
                                            echo "November";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan November</div>";
                                        break;
                                        case 12:
                                            echo "Desember";
                                            echo "<br>";
                                            echo "<div class='alert alert-info'>Anda memilih bulan Desember</div>";
                                        break;
                                        default:
                                            echo "<div class='alert alert-info'>Anda salah memberi input!<br>Silahkan coba lagi</div>";
                                    }
                                }
                                ?>
                                <button type="submit" class="btn btn-primary btn-sm btn-block" name="submitdata">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>