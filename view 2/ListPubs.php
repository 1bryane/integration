<?php
include '../Controller/PubC.php';
$PubC = new PubC();
$list = $PubC->listPubs();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Pubs</h1>
        <h2>
            <a href="addPub.php">Add Pub</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Pub</th>
            <th>statut</th>
            <th>nom pub(tite)</th>
            <th>description</th>
            <th>Update</th>
            <th>delete</th>
            
        </tr>
        <?php
        foreach ($list as $Pub) {
        ?>
            <tr>
                <td><?= $Pub['idPub']; ?></td>
                <td><?= $Pub['statut']; ?></td>
                <td><?= $Pub['Nom_p']; ?></td>
                <td><?= $Pub['description']; ?></td>
                <td align="center">
                    <form method="POST" action="updatePub.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Pub['idPub']; ?> name="idPub">
                    </form>
                </td>
                <td>
                    <a href="deletePub.php?idPub=<?php echo $Pub['idPub']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>