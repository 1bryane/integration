<?php
include '../config4.php';
include '../Model/event.php';

class eventC
{
    public function listevents()
    {
        $sql = "SELECT * FROM event";
        $db = config4::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteevent($id)
    {
        $sql = "DELETE FROM event WHERE idevent = :id";
        $db = config4::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addevent($event)
    {
        $sql = "INSERT INTO event  
        VALUES (NULL, :fn,:ln, :ad,:time_e)";
        $db = config4::getConnexion();
        try {
            print_r($event->gettime_e()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $event->getNom_event(),
                'ln' => $event->getdescription_e(),
                'ad' => $event->getAddress(),
                'time_e' => $event->gettime_e()->format('Y/m/d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateevent($event, $id)
    {
        try {
            $db = config4::getConnexion();
            $query = $db->prepare(
                'UPDATE event SET 
                    Nom_event = :Nom_event, 
                    description_e = :description_e, 
                    address = :address, 
                    time_e = :time_e
                WHERE idevent= :idevent'
            );
            $query->execute([
                'idevent' => $id,
                'Nom_event' => $event->getNom_event(),
                'description_e' => $event->getdescription_e(),
                'address' => $event->getAddress(),
                'time_e' => $event->gettime_e()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showevent($id)
    {
        $sql = "SELECT * from event where idevent = $id";
        $db = config4::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $event = $query->fetch();
            return $event;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    function showevent2($id)
    {
        $sql = "SELECT * FROM event WHERE Nom_event LIKE '%" . $id . "%'";
        $db = config4::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $events = $query->fetchAll();
            return $events;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
