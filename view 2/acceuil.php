<!doctype html>
<html lang="en">

<head>
    <!--
    /   Creart ' com: Free Template by FreeHTML5.co
    /   Author: https://freehtml5.co
    /   Facebook: https://facebook.com/fh5co
    /   Twitter: https://twitter.com/fh5co
    -->
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="../view/affichagepubdesign.css" rel="stylesheet" />
    <link rel="Website icon" type="png" href="../upload/logo head.PNG " width="40px" height="40px">



    <title>Creart ' com</title>
    <link rel="stylesheet" href="design.css">
</head>

<body >
    <style>
        body {
  background-image: url('bkg.PNG');
  background-repeat: no-repeat;
  background-size: 1550px 755px;
    background-attachment: fixed;

}
    </style>
    <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">Creart ' com</h2>
            <nav class="nav nav-fill mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/fh5co" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
                </li>
            </nav>


            <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
            <div class="ml-0 mr-0 pb-1">
                <nav class="navbar navbar-expand-md">

                    <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                        aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                        aria-label="Toggle navigation">
                        <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                    </button>
                    <div id="my-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                            <a class="nav-link" href="acceuil.php">acceuil</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="article.html">mon profil</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">ajouter un domaine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TECH</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LIFE</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">ajouter un domaine</a>
                            </li>
                            <li class="nav-item">
                                <form action="" method="POST">
                                    <div class="input-group mt-0 mx-auto" style="width:16px;">

                                        <div class="">
                                            <img src="assets/images/search-icon.png" id="toggle-search"
                                                class="ml-2 toggle-search" alt="search icon">
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


    </header>
 <!-- voir tous les pub  -->
                              
 <center>
                                            <hr style="color: #fff; ">
                                        <span class="heading" style="color: #fff;"><h1>liste des publications</h1></span>
                                        <hr>

                                        <?php
                                          include '../Controller/PubC.php';

                                                $PubC = new PubC();

                                                if (isset($_GET['Nom_p']) && !empty($_GET['Nom_p'])) {
                                                    $liste = $PubC->showPub2($_GET['Nom_p']);
                                                } else {
                                                    $liste = $PubC->listPubs();
                                                }
                                            ?>
                                          
                                                        <?php
                                                    foreach ($liste as $Pub) {
                                                    ?>
                                        <table border="2" style="background-color:aliceblue;">
                                              <tr>
                                               <td>
                                                <table>
                                                <thead>
                                                &emsp;  nom utilisateur <br>
                                                </thead>
                                                <tbody>
                                                <div class="cookie-card" style="width: 650px;">
                                                    <span class="title"><?= $Pub['idPub']; ?>⭐<?= $Pub['Nom_p']; ?></span>
                                                    <p class="description"><?= $Pub['statut']; ?>
                                                    <br>
                                                    <a href="#"><?= $Pub['description_p']; ?></a>. </p>
                                                <div class="actions">
                                                                  <button class="pref">
                                                                  <?= $Pub['domaine_p']; ?>
                                                                 </button>
                                                                 <form method="POST" action="updatePub.php" >
                                                                    <input type="submit" name="update" value="Update" style="color:limegreen">
                                                                    <input type="hidden" value=<?PHP echo $Pub['idPub']; ?> name="idPub">
                                                                </form>
                                                          <button class="accept">
                                                             <a href="deletePub.php?idPub=<?php echo $Pub['idPub']; ?>" style="color: red;">Delete</a>
                                                           </button>
                                                    </div>
                                                    </div>
                                                    </tbody>
                                                    </table>
                                                        </td>
                                                        <td><img src="../storage/images/<?= $Pub['image']; ?>" width="300px" height="300px"></td>
                                             </tr>
                                            </table> 
                                                    <br>
                                                    <hr> 
                                                    <?php
                                                    }
                                                    ?>

                                </center>
                        </center>
                            </tr>
                        </table>

    <!-- <div class="container-fluid jumbotron-fluid stay mt-5 pt-5 pb-5">
        <h2 class="text-center">Stay Updated</h2>
        <p class="text-center mt-2">Sign up for our newsletter to receive the latest news and event postings.</p>
        <div class="input-group mt-4 mx-auto" style="max-width: 640px">
            <input type="email" class="form-control" placeholder="YOUR EMAIL ADDRESS">
            <div class="">
                <button class="btn btn-success ml-2" type="submit">SIGN UP</button>
            </div>
        </div>
    </div> -->

    <footer class="container-fluid pt-5">
        <div class="container">
            <h2 class="logo text-center">Creart ' com</h2>
            <nav class="nav nav-fill mx-auto mt-5">
                <li class="nav-item">
                    <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
                </li>
            </nav>
        </div>
        <div class="copyright mt-4">
            <p>num:+21650312709</p>
            <p>mail:creartcom01@esprit.tn</p>
            <!-- <p class="text-center">&copy; 2019 <a href="#" class="text-white">Creart ' com</a>. All Rights Reserved. Design
                by <a href="https://freehtml5.co/shahala" target="_blank" class="text-white">FreeHTML5.co</a>.</p> -->
        </div>
    </footer>


    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.yu2fvl.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
