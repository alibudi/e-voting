<?php
    require_once('../../controller/CalonController.php');
    $calon = new CalonController();
    session_start();

    if(isset($_POST['submit-add'])){
        if($_POST['nomor'] == '' || $_POST['capres'] == '' ||
            $_POST['cawapres'] == '' || $_POST['gambar'] == '' || $_POST['visi'] == '' || $_POST['misi'] == '' ||$_POST['keterangan'] == ''||  
            $_POST['password'] != $_POST['r_password']){
            $_SESSION['form'] = 1;
            header('Location: add_calon.php');
            die();
        }

        $data = [
            'nomor'         => $_POST['nomor'],
            'capres'        => $_POST['capres'],
            'cawapres'      => $_POST['cawapres'],
            'gambar'        => $_POST['gambar'],
            'visi'          => $_POST['visi'],
            'misi'          => $_POST['misi'],
            'keterangan'    => $_POST['keterangan'],
            'password'      => md5($_POST['password']),
            'role'          => $_POST['role']
        ];
        
        $calon->add($data);
    }

    if(isset($_POST['submit-update'])){
        if($_POST['username'] == '' || $_POST['email'] == '' ||
            $_POST['name'] == '' || $_POST['role'] == ''){
            $_SESSION['form'] = 1;
            header('Location: user.php');
            die();
        }

        $id = $_POST['id'];
        $data = [
            'username'  => $_POST['username'],
            'email'     => $_POST['email'],
            'nama'      => $_POST['name'],
            'role'      => $_POST['role']
        ];
        
        $user->update($id, $data);
    }

    if(isset($_POST['submit-update-password'])){
        $id = $_POST['id'];
        if($_POST['password'] == '' || strlen($_POST['password']) < 5 || 
        $_POST['password'] != $_POST['r_password']){
            $_SESSION['form_password'] = 1;
            $_SESSION['id_user'] = $id;
            header('Location: user.php');
            die();
        }
        
        $data = [
            'password'  => md5($_POST['password']),
        ];
        
        $user->updatePassword($id, $data);
    }

    header('Location: user.php');
    die();

?>