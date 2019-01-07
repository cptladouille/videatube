<?php
require_once('model/model.php');
require_once('model/purchaseClass.php');
    class purchaseManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
        }

        public function add(purchaseClass $purchase)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs pour le titre, le prix, le lien et la date de mise en ligne.
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO purchase(date_purchase, id_video, id_user) VALUES(:date_purchase, :id_video, :id_user)');

            $q->bindValue(':date_purchase', $purchase->date_purchase());
            $q->bindValue(':id_video', $purchase->id_video());
            $q->bindValue(':id_user', $purchase->id_user());

            $q->execute();
        }

        public function delete(purchaseClass $purchase)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM purchase WHERE id = '.$purchase->id());
        }

        public function get($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet purchase.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM purchase WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
                
            return new purchaseClass($donnees);
        }
        public function getList()
        {
            // Retourne la liste de tout les achats.
            $purchases = [];

            $q = $this->_db->query('SELECT id, date_purchase, id_video, id_user FROM purchase ORDER BY id');

            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                $purchases[] = new purchaseClass($donnees);
            }

            return $purchases;
        }

        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>