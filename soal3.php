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
                    <a href="soal1.php" class="nav-item nav-link">Soal 1</a>
                    <a href="soal2.php" class="nav-item nav-link">Soal 2</a>
                    <a href="soal3.php" class="nav-item nav-link active">Soal 3</a>
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
                        <a href="#soal3a" class="nav-link active" data-bs-toggle="tab">3A</a>
                    </li>
                    <li class="nav-item">
                        <a href="#soal3b" class="nav-link" data-bs-toggle="tab">3B</a>
                    </li>
                    <li class="nav-item">
                        <a href="#soal3c" class="nav-link" data-bs-toggle="tab">3C</a>
                    </li>
                    <li class="nav-item">
                        <a href="#soal3d" class="nav-link" data-bs-toggle="tab">3D</a>
                    </li>
                    <li class="nav-item">
                        <a href="#soal3e" class="nav-link" data-bs-toggle="tab">3E</a>
                    </li>
                    <li class="nav-item">
                        <a href="#soal3f" class="nav-link" data-bs-toggle="tab">3F</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="soal3a">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 3A - Tampilkan list nama aset tanpa '_idr' yang memiliki urutan genap.</h5>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <br>
                            <?php
                                error_reporting(0);
                                $daftaraset = [
                                    "0"=>"rzb_idr", "1"=>"btc_idr","2"=>"ten_idr","3"=>"1inch_idr","4"=>"aave_idr","5"=>"abbc_idr",
                                    "6"=>"abyss_idr","7"=>"act_idr","8"=>"ada_idr","9"=>"adp_idr","10"=>"aioz_idr",
                                    "11"=>"alice_idr","12"=>"algo_idr","13"=>"alpaca_idr","14"=>"alt_idr","15"=>"amp_idr",
                                    "16"=>"ankr_idr","17"=>"aoa_idr","18"=>"ape_idr","19"=>"asixv2_idr","20"=>"ata_idr",
                                    "21"=>"atom_idr","22"=>"att_idr","23"=>"audio_idr","24"=>"avax_idr","25"=>"axs_idr",
                                    "26"=>"bake_idr","27"=>"bal_idr","28"=>"bat_idr","29"=>"bcd_idr","30"=>"bch_idr",
                                    "31"=>"belt_idr","32"=>"bnb_idr","33"=>"bnbhedge_idr","34"=>"bnt_idr","35"=>"bora_idr",
                                    "36"=>"botx_idr","37"=>"bsv_idr","38"=>"btg_idr","39"=>"btr_idr","40"=>"bts_idr",
                                    "41"=>"busd_idr","42"=>"cake_idr","43"=>"cbg_idr","44"=>"cel_idr","45"=>
                                    "46_idr","47"=>"chz_idr","48"=>"cind_idr","49"=>"ckb_idr","50"=>"coal_idr",
                                    "51"=>"comp_idr","52"=>"cfx_idr","53"=>"coti_idr","54"=>"cre_idr","55"=>"cro_idr",
                                    "56"=>"crv_idr","57"=>"ctsi_idr","58"=>"cvc_idr","59"=>"cvx_idr","60"=>"dad_idr",
                                    "61"=>"dai_idr","62"=>"dao_idr","63"=>"dash_idr","64"=>"dax_idr","65"=>"dent_idr",
                                    "66"=>"dep_idr","67"=>"dgb_idr","68"=>"dgx_idr","69"=>"dnt_idr","70"=>"doge_idr",
                                    "71"=>"dot_idr","72"=>"dvi_idr","73"=>"dydx_idr","74"=>"efi_idr","75"=>"egld_idr",
                                    "76"=>"elf_idr","77"=>"em_idr","78"=>"enj_idr","79"=>"eos_idr","80"=>"etc_idr",
                                    "81"=>"erg_idr","82"=>"eth_idr","83"=>"ethhedge_idr","84"=>"eurs_idr","85"=>"fil_idr",
                                    "86"=>"firo_idr","87"=>"ftm_idr","88"=>"ftt_idr","89"=>"gala_idr","90"=>"glch_idr",
                                    "91"=>"glm_idr","92"=>"gmt_idr","93"=>"grt_idr","94"=>"gsc_idr","95"=>"gxc_idr",
                                    "96"=>"hart_idr","97"=>"hbar_idr","98"=>"hedg_idr","99"=>"hedge_idr","100"=>"hibs_idr",
                                    "101"=>"hive_idr","102"=>"hnst_idr","103"=>"hnt_idr","104"=>"hot_idr","105"=>"hpb_idr",
                                    "106"=>"idk_idr","107"=>"ignis_idr","108"=>"imx_idr","109"=>"inj_idr","110"=>"iost_idr",
                                    "111"=>"iota_idr","112"=>"iotx_idr","113"=>"jst_idr","114"=>"kai_idr","115"=>"kava_idr",
                                    "116"=>"kdag_idr","117"=>"klay_idr","118"=>"knc_idr","119"=>"kok_idr","120"=>"ksm_idr",
                                    "121"=>"kunci_idr","122"=>"let_idr","123"=>"lgold_idr","124"=>"link_idr","125"=>"lland_idr",
                                    "126"=>"loom_idr","127"=>"lrc_idr","128"=>"lsilver_idr","129"=>"ltc_idr","130"=>"lyfe_idr",
                                    "131"=>"mana_idr","132"=>"matic_idr","133"=>"mbl_idr","134"=>"mkr_idr","135"=>"mmeta_idr",
                                    "136"=>"nbt_idr","137"=>"near_idr","138"=>"neo_idr","139"=>"nexo_idr","140"=>"nrg_idr",
                                    "141"=>"nxt_idr","142"=>"ocean_idr","143"=>"octo_idr","144"=>"ogn_idr","145"=>"okb_idr",
                                    "146"=>"omg_idr","147"=>"ont_idr","148"=>"orbs_idr","149"=>"orc_idr","150"=>"oxt_idr",
                                    "151"=>"pando_idr","152"=>"paxg_idr","153"=>"perp_idr","154"=>"poly_idr","155"=>"qnt_idr",
                                    "156"=>"qtum_idr","157"=>"ren_idr","158"=>"rep_idr","159"=>"rev_idr","160"=>"rvn_idr",
                                    "161"=>"sand_idr","162"=>"sfi_idr","163"=>"shill_idr","164"=>"signa_idr","165"=>"slp_idr",
                                    "166"=>"snx_idr","167"=>"sol_idr","168"=>"solve_idr","169"=>"srm_idr","170"=>"storj_idr",
                                    "171"=>"sumo_idr","172"=>"sushi_idr","173"=>"sxp_idr","174"=>"tad_idr","175"=>"tel_idr",
                                    "176"=>"tfuel_idr","177"=>"theta_idr","178"=>"titan_idr","179"=>"toko_idr","180"=>"trx_idr",
                                    "181"=>"uma_idr","182"=>"uni_idr","183"=>"usdc_idr","184"=>"usdp_idr","185"=>"usdt_idr",
                                    "186"=>"vcg_idr","187"=>"velo_idr","188"=>"vet_idr","189"=>"vex_idr","190"=>"vra_idr",
                                    "191"=>"vsys_idr","192"=>"waves_idr","193"=>"wbtc_idr","194"=>"wnxm_idr","195"=>"woo_idr",
                                    "196"=>"wozx_idr","197"=>"xch_idr","198"=>"xdc_idr","199"=>"xem_idr","200"=>"xlm_idr",
                                    "201"=>"wemix_idr","202"=>"xmr_idr","203"=>"xrp_idr","204"=>"xrphedge_idr","205"=>"xsgd_idr",
                                    "206"=>"xtz_idr","207"=>"xvs_idr","208"=>"yfi_idr","209"=>"yfii_idr","210t"=>"zec_idr",
                                    "211"=>"zil_idr","212"=>"zrx_idr"];
                                
                                foreach($daftaraset as $aset => $pair) {
                                    $str_delete = explode("_", $pair);
                                    if((int)$aset % 2 == 0){
                                        echo "Index ke-$aset = $str_delete[0]";
                                        echo "<br>";
                                    }
                                }
                                echo "<br>";
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="soal3b">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 3B - Tampilkan list nama aset tanpa '_idr' yang memiliki urutan ganjil.</h5>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <br>
                            <?php
                                foreach($daftaraset as $aset => $pair) {
                                    $str_delete = explode("_", $pair);
                                    if((int)$aset % 2 != 0){
                                        echo "Index ke-$aset = $str_delete[0]";
                                        echo "<br>";
                                    }
                                }
                                echo "<br>";
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="soal3c">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 3C - Tampilkan list nama aset tanpa '_idr' yang memiliki urutan bilangan prima.</h5>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <br>
                            <?php
                                foreach($daftaraset as $aset => $pair) {
                                    $str_delete = explode("_", $pair);
                                    $cek = true;
                                    if((int)$aset % 2 == 1){
                                        echo "index ke-$aset = $str_delete[0]";
                                        echo "<br>";
                                    }
                                    if($aset == 1 || $aset==0){
                                        $status = false;
                                        }
                                        for ($i = 2; $i <= (int)$aset-1 && $status; $i++)
                                        {
                                        if ($aset % $i == 0)
                                        {
                                        $status = false;
                                        }
                                        }
                                        if($status){
                                            echo "Index ke-$aset = $str_delete[0]";
                                        }
                                }
                                echo "<br>";
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="soal3d">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 3D - Tampilkan list nama aset tanpa '_idr' yang memiliki awalan a,c,e,g,i,k,m,o,q,s,u,w, dan y.</h5>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <br>
                            <?php
                                $hitung = count($daftaraset);
                                
                                for($i = 0; $i < $hitung; $i++){
                                    $data = (string)$daftaraset[$i];
                                    $data = preg_replace("/_idr/", "", $daftaraset[$i]);
                                
                                    if(($data[0]=="a")||($data[0]=="c")||($data[0]=="e")||($data[0]=="g")||($data[0]=="i")||($data[0]=="k")||($data[0]=="m")||($data[0]=="o")||($data[0]=="q")||($data[0]=="s")||($data[0]=="u")||($data[0]=="w")||($data[0]=="y")){
                                        echo "Aset awalan \"$data[0]\" = $data";
                                        echo "<br>";
                                    }
                                }
                                echo "<br>";
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="soal3e">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 3E - Tampilkan list nama aset tanpa '_idr' yang memiliki awalan b,d,f,h,j,l,n,p,r,t,v,x, dan z.</h5>
                        <p class="card-text">text.</p>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <br>
                            <?php
                                $hitung = count($daftaraset);
                                
                                for($i = 0; $i < $hitung; $i++){
                                    $data = (string)$daftaraset[$i];
                                    $data = preg_replace("/_idr/", "", $daftaraset[$i]);
                                
                                    if(($data[0]=="b")||($data[0]=="d")||($data[0]=="f")||($data[0]=="h")||($data[0]=="j")||($data[0]=="l")||($data[0]=="n")||($data[0]=="p")||($data[0]=="r")||($data[0]=="t")||($data[0]=="v")||($data[0]=="x")||($data[0]=="z")){
                                        echo "Aset awalan \"$data[0]\" = $data";
                                        echo "<br>";
                                    }
                                }
                                echo "<br>";
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="soal3f">
                        <!-- TAB CONTENT -->
                        <h5 class="card-title">Soal 3F - Tampilkan list nama aset tanpa '_idr' yang memiliki awalan huruf vokal saja.</h5>
                        <p class="card-text">text.</p>
                        <!-- CONTENT START -->
                        <div class="d-flex container justify-content-center mt-3">
                            <br>
                            <?php
                                $daftaraset = [
                                    "0"=>"rzb_idr", "1"=>"btc_idr","2"=>"ten_idr","3"=>"1inch_idr","4"=>"aave_idr","5"=>"abbc_idr",
                                    "6"=>"abyss_idr","7"=>"act_idr","8"=>"ada_idr","9"=>"adp_idr","10"=>"aioz_idr",
                                    "11"=>"alice_idr","12"=>"algo_idr","13"=>"alpaca_idr","14"=>"alt_idr","15"=>"amp_idr",
                                    "16"=>"ankr_idr","17"=>"aoa_idr","18"=>"ape_idr","19"=>"asixv2_idr","20"=>"ata_idr",
                                    "21"=>"atom_idr","22"=>"att_idr","23"=>"audio_idr","24"=>"avax_idr","25"=>"axs_idr",
                                    "26"=>"bake_idr","27"=>"bal_idr","28"=>"bat_idr","29"=>"bcd_idr","30"=>"bch_idr",
                                    "31"=>"belt_idr","32"=>"bnb_idr","33"=>"bnbhedge_idr","34"=>"bnt_idr","35"=>"bora_idr",
                                    "36"=>"botx_idr","37"=>"bsv_idr","38"=>"btg_idr","39"=>"btr_idr","40"=>"bts_idr",
                                    "41"=>"busd_idr","42"=>"cake_idr","43"=>"cbg_idr","44"=>"cel_idr","45"=>
                                    "46_idr","47"=>"chz_idr","48"=>"cind_idr","49"=>"ckb_idr","50"=>"coal_idr",
                                    "51"=>"comp_idr","52"=>"cfx_idr","53"=>"coti_idr","54"=>"cre_idr","55"=>"cro_idr",
                                    "56"=>"crv_idr","57"=>"ctsi_idr","58"=>"cvc_idr","59"=>"cvx_idr","60"=>"dad_idr",
                                    "61"=>"dai_idr","62"=>"dao_idr","63"=>"dash_idr","64"=>"dax_idr","65"=>"dent_idr",
                                    "66"=>"dep_idr","67"=>"dgb_idr","68"=>"dgx_idr","69"=>"dnt_idr","70"=>"doge_idr",
                                    "71"=>"dot_idr","72"=>"dvi_idr","73"=>"dydx_idr","74"=>"efi_idr","75"=>"egld_idr",
                                    "76"=>"elf_idr","77"=>"em_idr","78"=>"enj_idr","79"=>"eos_idr","80"=>"etc_idr",
                                    "81"=>"erg_idr","82"=>"eth_idr","83"=>"ethhedge_idr","84"=>"eurs_idr","85"=>"fil_idr",
                                    "86"=>"firo_idr","87"=>"ftm_idr","88"=>"ftt_idr","89"=>"gala_idr","90"=>"glch_idr",
                                    "91"=>"glm_idr","92"=>"gmt_idr","93"=>"grt_idr","94"=>"gsc_idr","95"=>"gxc_idr",
                                    "96"=>"hart_idr","97"=>"hbar_idr","98"=>"hedg_idr","99"=>"hedge_idr","100"=>"hibs_idr",
                                    "101"=>"hive_idr","102"=>"hnst_idr","103"=>"hnt_idr","104"=>"hot_idr","105"=>"hpb_idr",
                                    "106"=>"idk_idr","107"=>"ignis_idr","108"=>"imx_idr","109"=>"inj_idr","110"=>"iost_idr",
                                    "111"=>"iota_idr","112"=>"iotx_idr","113"=>"jst_idr","114"=>"kai_idr","115"=>"kava_idr",
                                    "116"=>"kdag_idr","117"=>"klay_idr","118"=>"knc_idr","119"=>"kok_idr","120"=>"ksm_idr",
                                    "121"=>"kunci_idr","122"=>"let_idr","123"=>"lgold_idr","124"=>"link_idr","125"=>"lland_idr",
                                    "126"=>"loom_idr","127"=>"lrc_idr","128"=>"lsilver_idr","129"=>"ltc_idr","130"=>"lyfe_idr",
                                    "131"=>"mana_idr","132"=>"matic_idr","133"=>"mbl_idr","134"=>"mkr_idr","135"=>"mmeta_idr",
                                    "136"=>"nbt_idr","137"=>"near_idr","138"=>"neo_idr","139"=>"nexo_idr","140"=>"nrg_idr",
                                    "141"=>"nxt_idr","142"=>"ocean_idr","143"=>"octo_idr","144"=>"ogn_idr","145"=>"okb_idr",
                                    "146"=>"omg_idr","147"=>"ont_idr","148"=>"orbs_idr","149"=>"orc_idr","150"=>"oxt_idr",
                                    "151"=>"pando_idr","152"=>"paxg_idr","153"=>"perp_idr","154"=>"poly_idr","155"=>"qnt_idr",
                                    "156"=>"qtum_idr","157"=>"ren_idr","158"=>"rep_idr","159"=>"rev_idr","160"=>"rvn_idr",
                                    "161"=>"sand_idr","162"=>"sfi_idr","163"=>"shill_idr","164"=>"signa_idr","165"=>"slp_idr",
                                    "166"=>"snx_idr","167"=>"sol_idr","168"=>"solve_idr","169"=>"srm_idr","170"=>"storj_idr",
                                    "171"=>"sumo_idr","172"=>"sushi_idr","173"=>"sxp_idr","174"=>"tad_idr","175"=>"tel_idr",
                                    "176"=>"tfuel_idr","177"=>"theta_idr","178"=>"titan_idr","179"=>"toko_idr","180"=>"trx_idr",
                                    "181"=>"uma_idr","182"=>"uni_idr","183"=>"usdc_idr","184"=>"usdp_idr","185"=>"usdt_idr",
                                    "186"=>"vcg_idr","187"=>"velo_idr","188"=>"vet_idr","189"=>"vex_idr","190"=>"vra_idr",
                                    "191"=>"vsys_idr","192"=>"waves_idr","193"=>"wbtc_idr","194"=>"wnxm_idr","195"=>"woo_idr",
                                    "196"=>"wozx_idr","197"=>"xch_idr","198"=>"xdc_idr","199"=>"xem_idr","200"=>"xlm_idr",
                                    "201"=>"wemix_idr","202"=>"xmr_idr","203"=>"xrp_idr","204"=>"xrphedge_idr","205"=>"xsgd_idr",
                                    "206"=>"xtz_idr","207"=>"xvs_idr","208"=>"yfi_idr","209"=>"yfii_idr","210t"=>"zec_idr",
                                    "211"=>"zil_idr","212"=>"zrx_idr"];

                                    $hitung = count($daftaraset);
                                    
                                    for($i = 0; $i < $hitung; $i++){
                                        $data = (string)$daftaraset[$i];
                                        $data = preg_replace("/_idr/", "", $daftaraset[$i]);
                                    
                                        if(($data[0]=="a")||($data[0]=="i")||($data[0]=="u")||($data[0]=="e")||($data[0]=="o")){
                                            echo "Aset awalan vokal \"$data[0]\" = $data";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<br>";
                            ?>
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