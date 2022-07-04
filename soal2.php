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
        <!-- <style>
        /* width
        ::-webkit-scrollbar {
        width: 20px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey; 
        border-radius: 10px;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: red; 
        border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #b30000; 
        }
        </style> -->
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
                    <a href="soal1.php" class="nav-item nav-link">Soal 1</a>
                    <a href="soal2.php" class="nav-item nav-link active">Soal 2</a>
                    <a href="soal3.php" class="nav-item nav-link">Soal 3</a>
                </div>
            </div>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <!-- SEGITIGA MENGGUNAKAN FOR -->
        <h4>2 - (FOR/WHILE/DO-WHILE)</h4></br>
        <h5 class="card-title">Soal 2A - segitiga (FOR)</h5>
        <p class="card-text">Buat Kode PHP untuk menampilkan bentuk segitiga menghadap kanan atas dan kanan bawah menggunakan FOR yang disusun menggunakan symbol * penuh dimana terdapat isian tinggi yang yang dapat dirubah rubah menggunakan scrollbar.</p>
        <div class="d-flex container justify-content-center mt-3">
            <form method="post">
                <div class="form-group">
                    <select name="segitiga" class="form-select" aria-label="select example">
                        <option selected>Pilih Segitiga:</option>
                        <option value="1">Segitiga Kanan Atas</option>
                        <option value="2">Segitiga Kanan Bawah</option>
                    </select>
                    <br>
                    <input type="number" class="form-control" placeholder="Tinggi Segitiga" name="a">
                </div>
                <br>
                <?php if(isset($_POST['submitfor']))
                {
                    $pilih = $_POST['segitiga'];
                    $input = $_POST['a'];

                    function segitigaKananAtas($input){

                        for($i = 1; $i <= $input;$i++){
                            for ($j = 1; $j <= $i; $j++) { 
                                echo "&nbsp *";
                            }
                            echo "</br>";
                        }
                    }

                    function segitigaKananBawah($input){

                        for($i = 1; $i <= $input; $i++){
                            for($j = $i; $j <= $input; $j++){
                                echo "&nbsp *";
                            }
                            echo "</br>";
                        }
                    }

                    if ($pilih == "1"){
                        echo "Segitiga Kanan Atas<br>";
                        $sAtas = segitigaKananAtas($input);
                        echo "<br>";
                    } else if ($pilih == "2"){
                        echo "Segitiga Kanan Bawah<br>";
                        $sBawah = segitigaKananBawah($input);
                        echo "<br>";
                    } else {
                        echo "Salah input data";
                    }
                }
                ?>
                <button type="submit" class="btn btn-primary btn-sm btn-block" name="submitfor">Submit</button>
            </form>
        </div>
        <br><br>
        <!-- SEGITIGA MENGGUNAKAN WHILE -->
        <h5 class="card-title">Soal 2B - segitiga (WHILE/DO-WHILE)</h5>
        <p class="card-text">Buat Kode PHP untuk menampilkan bentuk segitiga menghadap kanan atas dan kanan bawah menggunakan WHILE / DO-WHILE yang disusun menggunakan symbol * penuh dimana terdapat isian tinggi yang yang dapat dirubah rubah menggunakan scrollbar.</p>
        <div class="d-flex container justify-content-center mt-3">
            <form method="post">
                <div class="form-group">
                    <select name="segitiga" class="form-select" aria-label="select example">
                        <option selected>Pilih Segitiga:</option>
                        <option value="1">Segitiga Kanan Atas</option>
                        <option value="2">Segitiga Kanan Bawah</option>
                    </select>
                    <br>
                    <input type="number" class="form-control" placeholder="Tinggi Segitiga" name="b">
                </div>
                <br>
                <?php if(isset($_POST['submitwhile']))
                {
                    $pilih = $_POST['segitiga'];
                    $input = $_POST['b'];

                    function segitigaWhileAtas($input){
                        
                        $i=1;
                        while ($i <= $input) {
                            $j=1;
                            while ($j<= $i) {
                                $j++;
                                echo "&nbsp *";
                            }
                            $i++;
                            echo " </br>";
                        }
                    }

                    function segitigaWhileBawah($input){

                        $i=1;
                        while ($i <= $input) {
                            $j=$i;
                            while ($j <= $input) {
                                $j++;
                                echo "&nbsp *";
                            }
                            $i++;
                            echo " </br>";
                        }
                    }

                    if ($pilih == "1"){
                        echo "Segitiga Kanan Atas<br>";
                        $sAtas = segitigaWhileAtas($input);
                        echo "<br>";
                    } else if ($pilih == "2"){
                        echo "Segitiga Kanan Bawah<br>";
                        $sBawah = segitigaWhileBawah($input);
                        echo "<br>";
                    } else {
                        echo "Salah input data";
                    }
                }
                ?>
                <button type="submit" class="btn btn-primary btn-sm btn-block" name="submitwhile">Submit</button>
            </form>
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