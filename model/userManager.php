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
            $q = $this->_db->prepare('INSERT INTO user(lastname, firstname, mail, log, password, nickname, role) VALUES(:lastname, :firstname, :mail, :log, :password, :nickname, :role)');

            $q->bindValue(':lastname', $user->getLastname());
            $q->bindValue(':firstname', $user->getFirstname());
            $q->bindValue(':mail', $user->getMail());
            $q->bindValue(':log', $user->getLog());
            $q->bindValue(':password', $user->getPassword());
            $q->bindValue(':nickname', $user->getNickname());
            $q->bindValue(':role', $user->getRole());

            $q->execute();
        }

        public function delete(userClass $user)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM user WHERE id = '.$user->id());
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
                $login = '"'.(string) $login.'"';
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

        public function update(userClass $user)
        {
            // Prépare une requête de type UPDATE.
            // Assignation des valeurs à la requête.
            // Exécution de la requête.

        }

        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>