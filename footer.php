
<div class="footer-clean" style="background-color: #303f8f; border-top:  4px solid gold; color: white;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Buku Tamu</h4><hr>
                        <form action="buku_tamu_input.php" method="post">
    <table width="100%">
        <tr>
            <td align="top"><label for="nama">Nama</label></td>
            <td>
            <div class="form-group">
            <input class="form-control" type="text" name="nama" id="nama" autocomplete="off" required placeholder="Nama">
            </div>
            </td>
        </tr>
        <tr>
            <td><label for="email"><i class=‘fa fa-envelope’ aria-hidden=‘true’></i>Email</label></td>
            <td>
            <div class="form-group">
            <input class="form-control" type="text" name="email" id="email" autocomplete="off" required placeholder="contoh@gmail.com">
            </div>
            </td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td>
            <div class="form-group">
            <input class="form-control" type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Alamat">
            </div>
            </td>
        </tr>
        <tr>
            <td><label for="penilaian">Penilaian</label></td>
            <td>
            <div class="form-group">
                <select class="form-control" name="penilaian" required>
                    <option>Sangat_Bagus</option>
                    <option>Bagus</option>
                    <option>Cukup_Bagus</option>
                    <option>Kurang_Bagus</option>
                </select>
                </div>
            </td>
        </tr>
        <tr>
            <td><label for="Komentar">Komentar</label></td>
            <td>
            <div class="form-group">
            <input class="form-control" type="text" name="komentar" id="komentar" autocomplete="off" placeholder="Komentar">
            </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
            <button type="submit">Simpan</button>
            </td>
        </tr>
        </table>
    </form>
    <hr>
                    </div>
                <div class="col-md-3">
                     <h4>Kontak</h4><hr>
                    <?php
                    include 'koneksi.php';
                    $sql="SELECT * FROM profil";
                    $query=mysqli_query($conn,$sql);
                    $data=mysqli_fetch_assoc($query);
                    echo "Email :"."  ".$data['email']."<br>";
                    echo "NoHP  :"."  ".$data['no_telepon']."<br>";
                    ?>  
                </div>
                <div class="col-md-3" align="right">
                    <h4>Sosial Media</h4><hr>
                        <a href="<?php echo $data['facebook']; ?>" style="color: white;">Halaman Facebook</a>
                        <a href="<?php echo $data['facebook']; ?>"><img src="img/facebook.png"></a>
                        <br><br><br><br>
                        <h4>Pembuat</h4><hr>
                        <p>Nama : Berry<br>Kuliah Kerja Praktek<br>Teknik Informatika Unriyo 2018</p>

                    </div>
                </div>
            </div>
        </footer>
    </div>