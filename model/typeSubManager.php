<?php
require_once('model/model.php');
require_once('model/typeSubClass.php');
    class typeSubManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
        }

        public function get($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet typeSub.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM type_subscription WHERE id = '.$id);
            $datas = $q->fetch(PDO::FETCH_ASSOC);
                
            return new typeSubClass($datas);
        }

        public function getList()
        {
            // Retourne la liste de toutes les typeSubs.
            $typeSubs = [];

            $q = $this->_db->query('SELECT id, price, duration, nbDaysTrial, title FROM type_subscription ORDER BY id');

            while ($datas = $q->fetch(PDO::FETCH_ASSOC))
            {
                $typeSubs[] = new typeSubClass($datas);
            }

            return $typeSubs;
        }
        
        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>