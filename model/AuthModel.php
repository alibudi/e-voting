<?php 

    require_once('../config/Koneksi.php');

    class AuthModel extends Koneksi{
        private $table = 'tb_login';

        function getUserByData($data){
            $identitas  = $data['username'];
            $password   = md5($data['password']);

            try {
                $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $query = "SELECT * FROM ".$this->table." WHERE (username='$identitas') 
                AND password='$password'";
                $stmt = $conn->prepare($query); 
                $stmt->execute();
                return $stmt;
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
        }

    }

?>