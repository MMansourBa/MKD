<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>AFRO COUTURE - ACCUEIL</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css"> 
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        /* Style pour redimensionner les images de la bannière */
        .banner-item img {
            width: 100%;
            /* 100% de la largeur du conteneur parent */
            height: auto;
            /* Ajuster la hauteur proportionnellement à la largeur */
            max-height: 100%;
            /* Assurer que la hauteur n'excède pas 100% */
            object-fit: cover;
            /* Couvrir tout le conteneur tout en conservant les proportions de l'image */
            display: block;
            /* Assurer que c'est un élément de bloc */
        }

        /* Ajoutez ceci à votre feuille de style CSS */
        .custom-white-text {
            color: #fff;
            /* Couleur du texte blanc */
        }

        /* Si nécessaire, vous pouvez également définir la couleur du fond noir pour le menu déroulant */
        .dropdown-menu {
            background-color: #1d74e6;;
            /* Couleur du fond noir */
        }

        /* Style spécifique pour les liens à l'intérieur du menu déroulant */
        .dropdown-menu a {
            color: #fff;
            /* Couleur du texte blanc pour les liens du menu déroulant */
        }

        /* Style pour les liens au survol dans le menu déroulant */
        .dropdown-menu a:hover {
            background-color: #1d74e6;;
            /* Couleur de fond au survol */
        }
    </style>


</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>AFRO <em>Couture</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Accueil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../a-propos">A Propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVisiteur"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vous êtes Visiteur?
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownVisiteur">
                                <a class="dropdown-item custom-white-text"
                                    href="../visiteur/inscription">Inscription</a>
                                <a class="dropdown-item custom-white-text" href="../visiteur/connexion">Connexion</a>
                            </div>
                        </li>


                        <li class="nav-item ">
                            <a class="nav-link" href="../admin">Administrateur</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Banner Starts Here -->

    <div class="banner header-text">
        <div class="owl-banner owl-carousel" id="banner-carousel"></div>
    </div>
    <!-- Banner Ends Here -->

    <script>
        // Tableau des liens des images de la bannière
        var bannerImages = [
            "assets/images/hey.jpg",
            "assets/images/R (3).jpeg",
            "assets/images/img3.jpeg"
        ];


        // Tableau des textes correspondants à chaque image
        var bannerTexts = [
            "Trouver votre nouveau Look",
            "Enregistrer les modeles qui vous plaisent",
            "Observer-le,Fabriquer-le,Essayer-le."
        ];

        // Sélectionner l'élément de la bannière
        var bannerElement = document.getElementById("banner-carousel");

        // Parcourir le tableau des liens des images et créer les éléments de la bannière
        bannerImages.forEach(function(imageSrc, index) {
            var bannerItem = document.createElement("div");
            bannerItem.classList.add("banner-item");

            var imgElement = document.createElement("img");
            imgElement.src = imageSrc;
            imgElement.alt = "Banner Image";

            var textContent = document.createElement("div");
            textContent.classList.add("text-content");
            textContent.innerHTML = "<h4>L'héritage de la Couture Africaine</h4><h2>" + bannerTexts[index] +
                "</h2>";

            bannerItem.appendChild(imgElement);
            bannerItem.appendChild(textContent);
            bannerElement.appendChild(bannerItem);
        });
    </script>





    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Découvrez l'élégance ultime avec notre collection exclusive des derniers modèles. </h2><br><br>
                        <a href="../visiteur/inscription">regarder tous les modeles <i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/img2.jpeg" alt=""></a>
                        <div class="down-content">


                            <p>Cette tenue est originaire du nigeria .
                                Parcourez notre sélection exquise et offrez à vos petits des tenues.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (24)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/R.jpeg" alt=""></a>
                        <div class="down-content">


                            <p>Cette tenue est originaire du Senegal .
                                Parcourez notre sélection exquise et offrez à vos petits des tenues.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (21)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/hey2.jpg" alt=""></a>
                        <div class="down-content">

                            <p>Cette tenue est originaire de la Cote D'ivoire .
                                Parcourez notre sélection exquise et offrez à vos petits des tenues.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (36)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/R (4).jpeg" alt=""></a>
                        <div class="down-content">

                            <p>Cette tenue est originaire du Ghana .
                                Explorez l'élégance intemporelle et le raffinement contemporain de notre collection de
                                tenues pour adultes</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (48)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/R (5).jpg" alt=""></a>
                        <div class="down-content">

                            <p>Cette tenue est originaire de la Mauritanie .
                                Exprimez votre style personnel avec nos tenues qui transcendent les tendances éphémères,
                                car la véritable élégance est intemporelle.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (35)</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/images/hey3.jpg" alt=""></a>
                        <div class="down-content">

                            <p>Cette tenue est originaire du Senegal .
                                Chaque pièce est soigneusement conçue pour allier confort et style, mettant en valeur la
                                beauté naturelle de chaque personne. </p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (32)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>A propos de AFRO COUTURE</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Vous êtes à la recherche de modèle pour tenue africain ?</h4>

                        <ul class="featured-list">
                            <li>Notre mission est de célébrer et promouvoir la richesse de la diversité culturelle à
                                travers la mode africaine,
                                en mettant en lumière des pièces uniques qui reflètent l'histoire et la créativité de
                                chaque région.</li>
                            <li>Notre engagement inclut l'éducation et la sensibilisation, en partageant l'histoire
                                derrière chaque tenue,
                                en mettant en avant les savoir-faire locaux, et en encourageant la compréhension et le
                                respect des cultures africaines.</li>

                        </ul>
                        <a href="../a-propos" class="filled-button">Lire plus</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/tailleur.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>





    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2024 Co., Ltd.

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>



    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;

        function clearField(t) {
            if (!cleared[t.id]) {
                cleared[t.id] = 1;
                t.value = '';
                t.style.color = '#fff';
            }
        }
    </script>
</body>

</html>
