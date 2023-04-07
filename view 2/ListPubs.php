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
            <th>Image</th>
            <th>nom</th>
            <th>statut</th>
            <th>description_p</th>
            <th>domaine_p</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $Pub) {
        ?>
            <tr>
                <td><?= $Pub['idPub']; ?></td>
                <td><img src="../storage/images/<?= $Pub['image']; ?>" width="100px" height="100px"></td>
                <td><?= $Pub['Nom_p']; ?></td>
                <td><?= $Pub['statut']; ?></td>            
                <td><?= $Pub['description_p']; ?></td>             
                <td><?= $Pub['domaine_p']; ?></td>
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