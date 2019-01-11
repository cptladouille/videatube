<?php
require_once('model/model.php');
require_once('model/themeClass.php');

    class themeManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
        }

        public function add(themeClass $theme)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs pour le titre, le prix, le lien et la date de mise en ligne.
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO theme(title,description) VALUES(:title,:description)');

            $q->bindValue(':title', $theme->title());
            $q->bindValue(':description', $theme->description());

            $q->execute();
        }

        public function delete(themeClass $theme)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM theme WHERE id = '.$theme->id());
        }

        public function get($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet theme.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM theme WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
                
            return new themeClass($donnees);
        }

        public function getList()
        {
            // Retourne la liste de toutes les themes.
            $themes = [];

            $q = $this->_db->query('SELECT id, title, description FROM theme');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $themes[] = new themeClass($donnees);
            }

            return $themes;
        }

        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>