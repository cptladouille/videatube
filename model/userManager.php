<?php
require_once('model/model.php');
require_once('model/userClass.php');
    class userManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
        }

        public function add(userClass $user)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs du user.
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO user(lastname, firstname, mail, log, password, nickname, role, avatar) VALUES(:lastname, :firstname, :mail, :log, :password, :nickname, :role, :avatar)');

            $q->bindValue(':lastname', $user->getLastname());
            $q->bindValue(':firstname', $user->getFirstname());
            $q->bindValue(':mail', $user->getMail());
            $q->bindValue(':log', $user->getLog());
            $q->bindValue(':password', $user->getPassword());
            $q->bindValue(':nickname', $user->getNickname());
            $q->bindValue(':role', $user->getRole());
            $q->bindValue(':avatar', "user.png");

            $q->execute();
        }

        public function delete(userClass $user)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM user WHERE id = '.$user->getId());
        }

        public function get($id)
        {
            try
            {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet user.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM user WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
                
            return new userClass($donnees);
            }
            catch (PDOException $e) 
            {
                echo 'Échec lors de la recherche de lutilisateur par id : ' . $e->getMessage();
            }
        }
        
        public function getUserByLog($login)
        {
            try 
            {
                $login = "'".(string) trim($login ," \t\n\r\0\x0B")."'";
                
                $q = $this->_db->query('SELECT id FROM user WHERE log = '.$login);
                $id = $q->fetch(PDO::FETCH_ASSOC);  
                if ($id['id']!=0)
                {
                    $user = $this->get($id['id']);
                    return $user;
                }
                else
                {
                    return null;  
                }
            } 
            catch (PDOException $e) 
            {
                echo ' Échec lors de la connexion : ' . $e->getMessage();
                return null;
            }
        }

        public function getList()
        {
            // Retourne la liste de tout les users.
            $users = [];

            $q = $this->_db->query('SELECT id, lastname, firstname, mail, log, password, nickname, role FROM user ORDER BY id');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $users[] = new userClass($donnees);
            }

            return $users;
        }


        public function getListOfNicknames()
        {
           $users = $this->getList();
           foreach($users as $user)
           {
               $nicknames[] = $user->getNickname();
           }
           return $nicknames;
        }

        public function updateEdit($id,$datas)
        {

            // Prépare une requête de type UPDATE.
            // Assignation des valeurs à la requête.
            // Exécution de la requête.
            try{
                $q = $this->_db->prepare("UPDATE user SET lastname=:lastname, firstname=:firstname, mail=:mail, nickname=:nickname, avatar=:avatar where id = '$id' ");
                $q->bindValue(':lastname', $datas['lastname']);
                $q->bindValue(':firstname', $datas['firstname']);
                $q->bindValue(':mail', $datas['mail']);
                $q->bindValue(':nickname', $datas['nickname']);
                $q->bindValue(':avatar', $datas['avatar']);
                
                $q->execute();
            }
            catch (PDOException $e)
            {
                echo $e;
            }
        }
        public function updatePassword($id,$password)
        {
            // Prépare une requête de type UPDATE.
            // Assignation des valeurs à la requête.
            // Exécution de la requête.
            try{
                $q = $this->_db->prepare("UPDATE user SET password=:password where id = '$id' ");
                $q->bindValue(':password', $password);
                
                $q->execute();
            }
            catch (PDOException $e)
            {
                echo $e;
            }
        }

        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>