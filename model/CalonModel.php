<?php

require_once('../../config/Koneksi.php');

class CalonModel extends Koneksi{
    private $table = 'tb_calon';

    public function getData(){
        try {
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = 'SELECT * FROM '.$this->table;
            $stmt = $conn->prepare($query); 
            $stmt->execute();
            return $stmt;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    public function getDataById($id){
        try {
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "SELECT * FROM ".$this->table." WHERE id_user='$id'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    public function addData($data){
        $nama          = $data['nama'];
        $jk            = $data['jk'];
        $alamat        = $data['alamat'];
        $tempat_lhr    = $data['tempat_lhr'];
        $tgl_lhr       = $data['tgl_lhr'];

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "INSERT INTO tb_calon (nama, jk, alamat, tempat_lhr, tgl_lhr) 
            VALUES('$nama,'$jk','$alamat','$tempat_lhr','$tgl_lhr')";
            $conn->exec($query);
            return true;
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
        $conn = null;
    }

    public function updateData($id, $data){
        $username   = $data['username'];
        $email      = $data['email'];
        $nama       = $data['nama'];
        $role       = $data['role'];

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE users set username='$username', email='$email', nama='$nama', role='$role'
            WHERE id_user='$id'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            return $stmt->rowCount() > 0 ? true:false;
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
        $conn = null;
    }

    public function updateDataPassword($id, $data){
        $password   = $data['password'];

        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE users set password='$password' WHERE id_user='$id'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            return $stmt->rowCount() > 0 ? true:false;
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
        $conn = null;
    }

    public function deleteData($id){
        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "DELETE FROM users WHERE id_user='$id'";
            $conn->exec($query);
            return true;
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
        $conn = null;
    }
}

?>