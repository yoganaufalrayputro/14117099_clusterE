  <?php
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $id_jur= $_POST['ID_Jur'];
        $koneksi = mysqli_connect("localhost","root","","data mahasiswa");
        $hasil = mysqli_query($koneksi, "INSERT INTO mahasiswa (nrp,nama,alamat,id_jur) values ('$nrp','$nama','$alamat','$id_jur')");
        mysqli_query($koneksi,$hasil);
        echo '<script type="text/javascript">alert("Data Berhasil Ditambah!");
        </script>'; 
   ?>