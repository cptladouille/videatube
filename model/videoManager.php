<?php
    class videoManager
    {
        private $_db; // Instance de PDO.

        public function __construct($db)
        {
            $this->setDb($db);

        }

        public function add(videoClass $video)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs pour le titre, le prix, le lien et la date de mise en ligne.
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO video(title, price, link, date_upload) VALUES(:title, :price, :link, :date_upload)');

            $q->bindValue(':title', $video->title());
            $q->bindValue(':price', $video->price());
            $q->bindValue(':link', $video->link());
            $q->bindValue(':date_upload', $video->date_upload());

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

            $q = $this->_db->query('SELECT id, title, price, link, date_upload FROM video WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);

            return new videoClass($donnees);
        }

        public function getList()
        {
            // Retourne la liste de toutes les videos.
            $videos = [];

            $q = $this->_db->query('SELECT id, title, price, link, date_upload FROM video ORDER BY price');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
            $videos[] = new videoClass($donnees);
            }

            return $videos;
        }

        public function getListOfLinks()
        {
           $videos = this->getList();
           foreach($videos as $video)
           {
               $video->getLink
           }
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