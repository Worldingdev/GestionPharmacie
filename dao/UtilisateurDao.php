<?php
require_once __DIR__ .'/../vendor/composer/autoload_real.php';
require '../controller/ControlUtilisateur.php';
require '../config/Connection.php';

use Ramsey\Uuid\Uuid;

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
            $con->close();
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
        $con = $con->connection();
        do{
        $uuid = bin2hex(random_bytes(16));
        $query = $con->prepare("SELECT  * FROM Utilisateur where Id=?");
        $query->execute(array($uuid));
        $query->store_result();
        $users = $query->num_rows();
        }while($users>0);
        $name = $user->getNom();
        $username = $user->getUsername();
        $phone = $user->getTelephone();
        $nuni = $user->getNinu();
        $password = $user->getPassword();
        $type = $user->getType();
        
        $query2 = $con->prepare("INSERT INTO `Utilisateur`(`Id`, `Nom`, `Username`, `Telephone`, `NINU`, `motDePasse`, `Type`) VALUES (?,?,?,?,?,?,?)");
        $query2->execute(array($uuid,$name,$username,$phone,$nuni,sha1($password),$type));
        $con->close();
        header('location:../public/dashboard.php');
    }

    public function selectUser($id){
        $con = new Connection();
        $con = $con->connection();
        if($id == null){
            $users = $con->query("SELECT  * FROM Utilisateur");
        }
        else{
            $users = $con->prepare("SELECT  * FROM Utilisateur where Id=?");
            $users->execute(array($id));
            $users = $users->get_result();
        }
        
        return $users;
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