<?php 

    define('DB_SERVER', 'remotemysql.com:3306');
    define('DB_USER', 'LwopSHMpfj');
    define('DB_PASS', 'IaKcT1dZFP');
    define('DB_NAME', 'LwopSHMpfj');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($name, $price,	$image) {
            $result = mysqli_query($this->dbcon, "INSERT INTO menus(name, price, image) VALUES('$name', '$price', '$image')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM menus");
            return $result;
        }

        public function fetchonerecord($id) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM menus WHERE id = '$id'");
            return $result;
        }

        public function update($name, $price, $image ,$id) {
            $result = mysqli_query($this->dbcon, "UPDATE menus SET 
                name = '$name',
                price = '$price',
                image = '$image'
                WHERE id = '$id'
            ");
            return $result;
        }
        public function updatenoimage($name, $price ,$id) {
            $result = mysqli_query($this->dbcon, "UPDATE menus SET 
                name = '$name',
                price = '$price'
                WHERE id = '$id'
            ");
            return $result;
        }

        public function delete($id) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM menus WHERE id = '$id'");
            return $deleterecord;
        }

    }
    

?>