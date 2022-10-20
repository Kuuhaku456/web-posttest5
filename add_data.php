<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="judul">
        <p align = "center"> PESANAN PELAYANAN !!! </p>
    </div>
    
    <main>
    <div class="form">
            <div class="kotak">
                <form action="tampil_layanan.php" method="post">
                    <div class="isi">
                        <div class="input-box">
                            <span class="detail"> Nama Dokter </span>
                            <input type="text" name="nama" placeholder="Masukan Nama Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Alamat Dokter </span>
                            <input type="text" name="alamat" placeholder="Masukan Alamat Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Nomor Telepon </span>
                            <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor HP anda" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                        </div>
                        <div class="input-box">
                            <span class="detail">  </span>
                            <input type="text" name="barang" placeholder="Masukan Pelayanan yang digunakan" required>
                        </div>
                        <div class="input-check">
                            <input type="radio" name="metode" id="dot-1">
                            <input type="radio" name="metode" id="dot-2">
                            <span class="metode-judul"> Metode Pembayaran </span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="metode">Cash</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="metode">Transfer</span>
                                </label>
                            </div>
                        </div>
                        </div>
                        <div class="input-gambar">
                            <span class="detail"> Masukan Foto KTP Anda </span>
                            <input type="file" name="gambar" placeholder="Jika Ada">
                        </div>
                        <div class="button-submit">
                            <input type="submit" style ="comic sans ms" value="kirim">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>
</body>
</html>