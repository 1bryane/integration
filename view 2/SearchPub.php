<?php
include '../Controller/PubC.php';
$PubC = new PubC();

if (isset($_GET['Nom_p']) && !empty($_GET['Nom_p'])) {
    $liste = $PubC->showPub2($_GET['Nom_p']);
} else {
    $liste = $PubC->listPubs();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="Nom_p" id="Nom_p" placeholder="Enter Nom_p">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of Pubs</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Pub</th>
            <th>Nom_p</th>
            <th>statut</th>
            <th>description_p</th>
            <th>domaine_p</th>
            <th>image</th>



  
        </tr>
        <?php
        foreach ($liste as $Pub) {
        ?>
            <tr>
                <td><?= $Pub['idPub']; ?></td>
                <td><?= $Pub['Nom_p']; ?></td>
                <td><?= $Pub['statut']; ?></td>
                <td><?= $Pub['description_p']; ?></td>
                <td><?= $Pub['domaine_p']; ?></td>
                <td><img src="../storage/images/<?= $Pub['image']; ?>" width="100px" height="100px"></td>
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
                
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>