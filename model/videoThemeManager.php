<?php
require_once('model/model.php');
require_once('model/videoThemeClass.php');

    class videoThemeManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
        }

        public function add(videoThemeClass $videoTheme)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs pour l'id de vidéo et l'id de theme associés
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO videoTheme(id_video, id_theme) VALUES(:id_video, :id_theme)');

            $q->bindValue(':id_video', $videoTheme->id_video());
            $q->bindValue(':id_theme', $videoTheme->id_theme());

            $q->execute();
        }

        public function delete(videoThemeClass $videoTheme)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM videoTheme WHERE id = '.$videoTheme->id());
        }

        public function get($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet videoTheme.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM videoTheme WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
                
            return new videoThemeClass($donnees);
        }

        public function getList()
        {
            // Retourne la liste de toutes les associations video/Themes.
            $videoThemes = [];

            $q = $this->_db->query('SELECT id, id_video FROM videoTheme');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $videoThemes[] = new videoThemeClass($donnees);
            }

            return $videoThemes;
        }

        public function update(videoThemeClass $videoTheme)
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