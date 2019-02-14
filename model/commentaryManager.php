<?php
require_once('model/model.php');
require_once('model/commentaryClass.php');
require_once('model/videoClass.php');
    class commentaryManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
        }

        public function add(commentaryClass $commentary)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs pour le titre, le prix, le lien et la date de mise en ligne.
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO commentary(content, id_video, id_user,date_comm) VALUES(:content, :id_video, :id_user, :date_comm)');
            
            $q->bindValue(':content', $commentary->getContent());
            $q->bindValue(':id_video', $commentary->getId_video());
            $q->bindValue(':id_user', $commentary->getId_user());
            $q->bindValue(':date_comm', $commentary->getDate_comm());

            $q->execute();
        }

        public function delete(commentaryClass $commentary)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM commentary WHERE id = '.$commentary->getId());
        }

        public function get($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet commentary.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM commentary WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
                
            return new commentaryClass($donnees);
        }

        public function getByVideo(videoClass $Video)
        {  
            $q = $this->_db->query("SELECT id, date_comm, id_video, id_user, content FROM commentary WHERE id_video = '".$Video->getId()."' ORDER BY date_comm DESC");
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $commentarys[] = new commentaryClass($donnees);
            }
            var_dump($commentarys);
            return $commentarys;
        }

        public function getList()
        {
            // Retourne la liste de tout les achats.
            $commentarys = [];

            $q = $this->_db->query('SELECT id, date_comm, id_video, id_user FROM commentary ORDER BY id');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $commentarys[] = new commentaryClass($donnees);
            }

            return $commentarys;
        }

        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>