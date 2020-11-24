<?php
            $kunci = $_POST['keycari'];
            $koneksi = mysqli_connect("localhost","root","","data_mahasiswa");
            $search = mysqli_query($koneksi, "SELECT * FROM  mahasiswa where nama like '%$kunci%'");
            
            $exist = false;
            while($baris = mysqli_fetch_array($search)){
                $exist = true;
                echo "Nama : "; echo $baris[0]; echo "<br>";
                echo "NRP : "; echo $baris[1]; echo "<br>";
                echo "Alamat : "; echo $baris[2]; echo "<br>";
                echo "ID_Jurusan : "; echo $baris[3]; echo "<br><br>";
            }
            if(!$exist){
                echo "Data Tidak Ditemukan.";
            }
   ?>