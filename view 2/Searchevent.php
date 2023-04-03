<?php
include '../Controller/eventC.php';
$eventC = new eventC();

if (isset($_GET['Nom_event']) && !empty($_GET['Nom_event'])) {
    $liste = $eventC->showevent2($_GET['Nom_event']);
} else {
    $liste = $eventC->listevents();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="Nom_event" id="Nom_event" placeholder="Enter Nom_event">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of events</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id event</th>
            <th>Nom_event</th>
            <th>description_e</th>
            <th>address</th>
            <th>time_e</th>

            
            
  
        </tr>
        <?php
        foreach ($liste as $event) {
        ?>
            <tr>
                <td><?= $event['idevent']; ?></td>
                <td><?= $event['Nom_event']; ?></td>
                <td><?= $event['description_e']; ?></td>
                <td><?= $event['address']; ?></td>
                <td><?= $event['time_e']; ?></td>
                
                
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>