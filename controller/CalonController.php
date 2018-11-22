<?php
    require_once('../../model/CalonModel.php');

    class CalonController{

        public function getAll(){
            $calon = new CalonModel();
            $data = $calon->getData();
            return $data;
        }

        public function getById($id){
            $user = new UsersModel();
            $result = $user->getDataById($id);
            $rows = [];
            while($row = $result->fetch())
            {
                $rows[] = $row;
            }
            echo json_encode($rows, JSON_PRETTY_PRINT);
        }

        public function add($data){
            $calon = new CalonModel();
            $save = $calon->addData($data);
            if($save){
                session_start();
                $_SESSION['save'] = 1;

                header('Location: add_calon.php' );
                die();
            } else{
                session_start();
                $_SESSION['save'] = 0;

                header('Location: add_calon.php' );
                die();
            }
        }

        public function update($id, $data){
            $user = new UsersModel();
            $update = $user->updateData($id, $data);
            if($update){
                session_start();
                $_SESSION['save'] = 1;

                header('Location: user.php' );
                die();
            } else{
                session_start();
                $_SESSION['save'] = 0;

                header('Location: user.php' );
                die();
            }
        }

        public function updatePassword($id, $data){
            $user = new UsersModel();
            $update = $user->updateDataPassword($id, $data);
            if($update){
                session_start();
                $_SESSION['update'] = 1;
                $_SESSION['id_user'] = $id;

                header('Location: user.php' );
                die();
            } else{
                session_start();
                $_SESSION['update'] = 0;
                $_SESSION['id_user'] = $id;

                header('Location: user.php' );
                die();
            }
        }

        public function delete($id){
            $user = new UsersModel();
            $delete = $user->deleteData($id);
            if($delete){
                session_start();
                $_SESSION['delete'] = 1;

                header('Location: user.php' );
                die();
            } else{
                session_start();
                $_SESSION['delete'] = 0;

                header('Location: user.php' );
                die();
            }
        }
    }

?>