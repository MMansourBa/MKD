<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>AFROCOUTURE-CONNECTION</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('formlogin/css/style.css') }}" type="text/css" media="all" />

    <!-- Style-CSS -->
    <link href="{{ asset('formlogin/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }

        .banner-image {
            width: 100%;
            height: 100vh; /* 100% de la hauteur de la fenêtre visible */
            object-fit: cover; /* Couvrir tout en conservant les proportions de l'image */
            object-position: center top; /* Centrer l'image horizontalement et aligner le haut de l'image */
            position: absolute; /* Position absolue pour couvrir toute la page */
            top: 0;
            left: 0;
            z-index: -1; /* Mettez l'image en arrière-plan (derrière le contenu) */
        }

        /* ... (autres styles CSS) ... */
    </style>

    <!-- web-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <div class="main-bg">
        <img src="{{ asset('formlogin/images/user.jpeg') }}" alt="Bannière AFROCOUTURE" class="banner-image">
        <!-- title -->
        <h1>AUTHENTIFICATION</h1>

        <!-- //title -->
        <!-- content -->
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt">
                <div class="top-content-style">
                    <img src="{{ asset('formlogin/images/user.jpeg') }}" alt="" />
                </div>
                <form action="{{ route('visiteurConnexion') }}" method="post">
                    @csrf
                    <p class="legend">Connecter-vous<span class="fa fa-hand-o-down"></span></p>
                    <div class="input">
                        <input type="email" placeholder="Email" name="email" required />
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Mot de passe" name="password" required />
                        <span class="fa fa-unlock"></span>
                    </div>
                    <button type="submit" class="btn submit">
                        <span class="fa fa-sign-in"></span>
                    </button>
                </form>
                <a href="{{route('visiteurInscription')}}" class="bottom-text-w3ls">Pas encore inscrit? Creer un compte.</a>
            </div>
        </div>
        <!-- //content -->
        <!-- copyright -->
        <div class="copyright">
            <h2>&copy; 2024 AFROCOUTURE.
            </h2>
        </div>
        <!-- //copyright -->
    </div>
</body>

</html>
