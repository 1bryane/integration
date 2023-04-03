<?php
include '../Controller/PubC.php';
$PubC = new PubC();

if (isset($_GET['label']) && !empty($_GET['label'])) {
    $list = $PubC->showPub($_GET['label']);
} else {
    $list = $PubC->listPubs();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="label" id="label" placeholder="Enter Pub id">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of Pubs</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Pub</th>
            <th>nom pub</th>
            <th>statut</th>
            <th>description</th>
           
        </tr>
        <?php
      
        if (is_array($list)) {
            foreach ($list as $Pub) {
        
        ?>
            <tr>
                <td><?= $Pub['idPub']; ?></td>
                <td><?= $Pub['statut']; ?></td>
                <td><?= $Pub['Nom_p']; ?></td>
                <td><?= $Pub['description']; ?></td>
                
            </tr>
        <?php
        }}
        ?>
    </table>
</body>

</html>