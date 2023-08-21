<?php


require '../app/Utilisateur.php';






class ControlUtilisateur{

    private $user;

    public function Login(){
        $this->user = new GESTIONPHARMACIE\app\Utilisateur(null,
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
        $this->user = new GESTIONPHARMACIE\app\Utilisateur(null,
        null,null,null,null,null,
        null);
        
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