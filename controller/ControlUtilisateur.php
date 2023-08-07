<?php
namespace GESTIONPHARMACIE\controller;

require_once __DIR__ .'/../vendor/composer/autoload_real.php';
use GESTIONPHARMACIE\app\Utilisateur;
use GESTIONPHARMACIE\config\Connection;
use Ramsey\Uuid\Uuid;



class ControlUtilisateur{

    private $user;

    public function Login(){
        $this->user = new Utilisateur(null,
        null,null,null,null,null,
        null);
       
        if (isset($_POST['username'])) {
            $this->user->setUsername( htmlentities($_POST['username']));
        }
        if (isset($_POST['password'])) {
            $this->user->setPassword(sha1($_POST['password']));
        }
        return $this->user;
    }

    public function Save(){
        $this->user = new Utilisateur(null,
        null,null,null,null,null,
        null);
        $connect = new Connection();
        $connect->connection();
        do{
        $uuid = Uuid::uuid4();
        $query = $connect->prepare("SELECT  * FROM Utilisateur where Id=?");
        $query->execute($uuid);
        $query->store_result();
        $users = $query->num_rows();
        }while($users>0);
        $connect->disconnection();

        $this->user->setId($uuid);
        
        if (isset($_POST['name'])) {
            $this->user->setNom( htmlentities($_POST['name']));
        }
        if (isset($_POST['username'])) {
            $this->user->setUsername( htmlentities($_POST['username']));
        }
        if (isset($_POST['tel'])) {
            $this->user->setTelephone( $_POST['tel']);
        }
        if (isset($_POST['NUNI'])) {
            $this->user->setNinu( $_POST['NUNI']);
        }
        if (isset($_POST['password'])) {
            $this->user->setPassword(sha1($_POST['password']));
        }
        if (isset($_POST['gridRadios'])) {
            $this->user->setType( $_POST['gridRadios']);
        }
        return $this->user;
    }
}
?>