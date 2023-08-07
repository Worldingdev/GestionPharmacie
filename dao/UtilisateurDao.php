<?php
namespace GESTIONPHARMACIE\dao;

use GESTIONPHARMACIE\controller\ControlUtilisateur;
use GESTIONPHARMACIE\config\Connection;

class UtilisateurDao{

    private $userController;
    private $con;
    

    public function login(){
        $con = new Connection();
        $userController = new ControlUtilisateur();
        $con = $con->connection();
        $user = $userController->login();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $query = $con->prepare("SELECT  * FROM Utilisateur where Username=? and motDePasse=?");
        $query->execute(array($username,$password));
        $query->store_result();
        $users = $query->num_rows();
        if($users>0){
            $users1 = $query->fetch();
            $_SESSION['email'] = $users1['email'];
            $con->disconnection();
            header('location:../public/dashboard.php');
        }
        else{
        header('location:../public/index.php');
        }
    }

    public function save(){
        $con = new Connection();
        $userController = new ControlUtilisateur();
        $user = $userController->save();
        $id = $user->getId();
        $name = $user->getNom();
        $username = $user->getUsername();
        $phone = $user->getTelephone();
        $nuni = $user->getNinu();
        $password = $user->getPassword();
        $type = $user->getType();
        $con = $con->connection();
        $query = $con->prepare("INSERT INTO Utilisateur VALUES Id=?, Nom=?, Username=?, Telephone=?, NINU=?, motDePasse=?, `Type`=?");
        $query->execute(array($id,$name,$username,$phone,$nuni,sh1($password),$type ));
    }
    
}
$userDao = new UtilisateurDao();
if (isset($_POST['login'])){
    $userDao->login();
}
if (isset($_POST['save'])){
    $userDao->save();
}


?>