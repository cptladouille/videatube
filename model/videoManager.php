<?php
require_once('model/model.php');
require_once('model/videoClass.php');
    class videoManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
        }

        public function add(videoClass $video)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs pour le titre, le prix, le lien et la date de mise en ligne.
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO video(title, price, link, date_upload, thumbnail, nbViews,description) VALUES(:title, :price, :link, :date_upload, :thumbnail, :nbViews, :description)');

            $q->bindValue(':title', $video->getTitle());
            $q->bindValue(':price', $video->getPrice());
            $q->bindValue(':link', $video->getLink());
            $q->bindValue(':date_upload', $video->getDate_upload());
            $q->bindValue(':thumbnail', $video->getThumbnail());
            $q->bindValue(':nbViews', $video->getNbViews());
            $q->bindValue(':description', $video->getDescription());

            $q->execute();
        }

        public function delete(videoClass $video)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM video WHERE id = '.$video->id());
        }

        public function get($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Video.
            $id = (int) $id;
            $q = $this->_db->query('SELECT * FROM video WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
                
            return new videoClass($donnees);
        }

        public function getCommentary(videoClass $video)
        {
            $cArray[] = null;
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Video.
            $q = $this->_db->query('SELECT c.id, c.content, c.date_comm, u.nickname FROM video v INNER JOIN commentary c ON v.id = c.id_video INNER JOIN user u ON c.id_user = u.id WHERE v.id = '.$video->getId());
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $cArray[] = $donnees;
            }
            
            return $cArray;
        }

        public function getList()
        {
            // Retourne la liste de toutes les videos.
            $videos = [];

            $q = $this->_db->query('SELECT id, title, price, link, date_upload,thumbnail, nbViews, description FROM video ORDER BY date_upload DESC LIMIT 0,12');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $videos[] = new videoClass($donnees);
            }

            return $videos;
        }

        public function getListOfLinks()
        {
           $videos = $this->getList();
           foreach($videos as $video)
           {
               $links[] = $video->getLink();
           }
           return $links;
        }

        public function update(videoClass $video)
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