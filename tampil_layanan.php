<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <a href="Halodoc.html"><img src="halodoc-logo.png"></a>
        <nav>
            <ul class="navbar">
                <li><a href='index.php'>Home</a></li>
                <li><a href='pelayanan.php'>Pelayanan</a></li>
                <li><a href='#partners'>Partner</a></li>
                <li><a href='about-me.html'>About Me</a></li>
                <li><a href="#contact">Contact</a></li>
                <?php if(!isset($_SESSION["username"])){
                    echo('<li><a href="login.php" class="tbl-pink" id="sign">Sign In</a></li>');
                }else {
                    echo('<li><a href="logout.php" class="tbl-pink" id="logout">logout</a></li>');
                } ?>
                
                <li>
                    <label>
                        <input type="checkbox" class="checkbox" id="tombol">
                        <span class="check"></span>
                    </label>
                </li>
            </ul>
        </nav>
    </header>
    <div class ="Judul-tampilan">
        <div class="judul">
            <p align = "center"> PESANAN ANDA !!! </p>
        </div>
    </div>
    <div class = "kotak-luar">
        <div class="phpnya">
            <?php
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $nomorhp = $_POST['phone'];
                $barang = $_POST['barang'];
                $metode = $_POST['metode'];
                $gambar = $_POST['gambar'];
    
                echo "Nama Pemesan        : ".$nama."<br>"; 
                echo "Alamat Pemesan      : ".$alamat."<br>";
                echo "Nomor HP Pemesan    : ".$nomorhp."<br>";
                echo "Barang Yang Dipesan : ".$barang."<br>";
                echo "Metode Pembayaran   : ".$metode."<br>";
            ?>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="row">
                <div class="footer-col">
                    <h4> Follow Us </h4>
                    <div class="social-links">
                        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
                    <div class="footer-col">
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="#">Bantuan</a></li>
                            <li><a href="#">Accept Cookies</a></li>
                            <li><a href="#">konsultasi</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>jelajah</h4>
                        <ul>
                            <li><a href="#">karir</a></li>
                            <li><a href="#">security</a></li>
                            <li><a href="#">media</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Apotik</h4>
                        <ul>
                            <li><a href="#">Columbia</a></li>
                            <li><a href="#">Restu Ibu</a></li>
                            <li><a href="#">Kimia Farma</a></li>
                            <li><a href="#">Kurnia</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
    