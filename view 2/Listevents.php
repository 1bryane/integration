<?php
include '../Controller/eventC.php';
$eventC = new eventC();
$list = $eventC->listevents();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of events</h1>
        <h2>
            <a href="addevent.php">Add event</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id event</th>
            <th>nom de l'evennement</th>
            <th>description de l'evennement </th>
            <th>adress</th>
            <th>Date of event</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $event) {
        ?>
            <tr>
                <td><?= $event['idevent']; ?></td>
                <td><?= $event['Nom_event']; ?></td>
                <td><?= $event['description_e']; ?></td>
                <td><?= $event['address']; ?></td>
                <td><?= $event['time_e']; ?></td>
                <td align="center">
                    <form method="POST" action="updateevent.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $event['idevent']; ?> name="idevent">
                    </form>
                </td>
                <td>
                    <a href="deleteevent.php?idevent=<?php echo $event['idevent']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>