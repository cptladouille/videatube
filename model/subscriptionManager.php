<?php
require_once('model/model.php');
require_once('model/subscriptionClass.php');
require_once('model/typeSubClass.php');
    class subscriptionManager extends Model
    {
        private $_db; // Instance de PDO.

        public function __construct()
        {
            $this->setDb($this->connectBDD());
            $this->updateSubs();
        }

        public function add(subscriptionClass $subscription)
        {
            // Préparation de la requête d'insertion.
            // Assignation des valeurs pour le titre, le prix, le lien et la date de mise en ligne.
            // Exécution de la requête.
            $q = $this->_db->prepare('INSERT INTO subscription(date_sub, id_user, id_type_subscription) VALUES(:date_sub, :id_user, :id_type_subscription)');

            $q->bindValue(':date_sub', $subscription->getDate_sub());
            $q->bindValue(':id_user', $subscription->getId_user());
            $q->bindValue(':id_type_subscription', $subscription->getId_type_subscription());

            $q->execute();
        }

        public function delete(subscriptionClass $subscription)
        {
            // Exécute une requête de type DELETE.
            $this->_db->exec('DELETE FROM subscription WHERE id = '.$subscription->getId());
        }

        public function get($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet subscription.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM subscription WHERE id = '.$id);
            $datas = $q->fetch(PDO::FETCH_ASSOC);
                
            return new subscriptionClass($datas);
        }
        
        public function getFromUser($id)
        {
            // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet subscription.
            $id = (int) $id;

            $q = $this->_db->query('SELECT * FROM subscription WHERE id_user = '.$id);
            $datas = $q->fetch(PDO::FETCH_ASSOC);
                
            return new subscriptionClass($datas);
        }

        public function isSubscribed($id)
        {
            $id = (int) $id;
            $q = $this->_db->query("SELECT s.id FROM type_subscription ts INNER JOIN subscription s ON s.id_type_subscription = ts.id WHERE s.id_user = '".$id."'");
            $data = $q->fetch(PDO::FETCH_ASSOC);
            if ($data == false)
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        public function getAboDate($id)
        {
            // recupere le nombre de jours d'abonnement jours date d'expiration de l'abonnement - date actuelle
            $id = (int) $id;
            $q = $this->_db->query("SELECT ADDDATE(s.date_sub,(ts.duration+ts.nbDaysTrial)) as aboDate FROM type_subscription ts INNER JOIN subscription s ON s.id_type_subscription = ts.id WHERE s.id_user = '".$id."'");
            $data = $q->fetch(PDO::FETCH_ASSOC);
            $data = new DateTime($data['aboDate']);
            return ($data->format('d/m/Y H:i:s'));
        }
        

        //$q = $this->_db->query("SELECT SUM((ts.duration+ts.nbDaysTrial)-TIMESTAMPDIFF(DAY,s.date_sub,NOW())) as nbMinLeft FROM type_subscription ts INNER JOIN subscription s ON s.id_type_subscription = ts.id WHERE s.id_user = '".$id."'");
        public function getTimeAbo($id)
        {
            // recupere le nombre de jours d'abonnement jours date d'expiration de l'abonnement - date actuelle
            $id = (int) $id;
            $q = $this->_db->query("SELECT (TIMESTAMPDIFF(MINUTE,NOW(),ADDDATE(s.date_sub,(ts.duration+ts.nbDaysTrial)))) as nbMinLeft FROM type_subscription ts INNER JOIN subscription s ON s.id_type_subscription = ts.id WHERE s.id_user = '".$id."'");
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return ($data);
        }

        public function getDateTrial($id)
        {
            // Exécute une requête de type SELECT demandant le nombre de jours d'abonnement restant.
            $id = (int) $id;
            $q = $this->_db->query("SELECT ADDDATE(s.date_sub,(ts.nbDaysTrial)) as dateTrial FROM type_subscription ts INNER JOIN subscription s ON s.id_type_subscription = ts.id WHERE s.id_user = '".$id."'");
            $data = $q->fetch(PDO::FETCH_ASSOC);
                
            return ($data);
        }

        public function updateSubs()
        {
            //supprime les abonnement expirés ((date de l'inscription + durée) - (date du jour))
            $this->_db->exec("DELETE FROM `subscription` WHERE (TIMESTAMPDIFF(MINUTE, NOW(),ADDDATE(`date_sub`,(SELECT `duration`+`nbDaysTrial` FROM type_subscription WHERE id = subscription.id_type_subscription))) <= 0)");
        }

        public function getList()
        {
            // Retourne la liste de toutes les subscriptions.
            $subscriptions = [];

            $q = $this->_db->query('SELECT id, date_sub, id_user, id_type_subscription FROM subscription ORDER BY id');

            while ($datas = $q->fetch(PDO::FETCH_ASSOC))
            {
                $subscriptions[] = new subscriptionClass($datas);
            }

            return $subscriptions;
        }
        
        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>