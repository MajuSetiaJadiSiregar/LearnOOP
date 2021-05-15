<?php

    class Database {
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "db_warungbelajar";
        var $koneksi = "";

        function __construct() {
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

            if(mysqli_connect_errno()) {
                echo "Koneksi database gagal : " . mysqli_connect_errno();
            }
        }

        function tampil_data() {
            $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang");
            while($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }
?>