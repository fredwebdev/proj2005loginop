<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>LAMBILLIONEA</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{URL::asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<!-- JS -->
<script type="text/javascript" src="{{URL::asset('js/materialize.js')}}js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="{{URL::asset('js/materialize.js')}}"></script>
<script>

    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();

        $('#header').load("{{URL::asset('/modals.html')}}");
    });

</script>
<div class="bg-grass">
    <header class="navbar-fixed z-depth-2">

        <!-- NAVIGATION -->
        <nav class="light-green darken-4" role="navigation">
            <div class="nav-wrapper container">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="{{URL::asset('accueil')}}" class="white-text">ACCUEIL</a></li>
                    <li><a href="{{URL::asset('revues')}}" class="white-text">LA REVUE</a></li>
                    <li><a href="{{URL::asset('articles')}}" class="white-text">PUBLIER UN ARTICLE</a></li>
                    <li><a href="{{URL::asset('evenement')}}" class="white-text">événements</a></li>
                    @if(Auth::user())
                    <li><a href="{{URL::asset('evenements')}}" class="white-text">GESTION(événements)</a></li>
                        @endif
                </ul>

                <ul class="right hide-on-med-and-down">
                    @if (Auth::guest())
                    <li class="light-green darken-3"><a href="connexion" class="modal-trigger white-text"><img src="{{URL::asset('media/icons/fa-power.png')}}" style="margin-right: 10px">CONNEXION</a></li>
                    @else
                    <li class="light-green darken-3"><a href="logout" class="modal-trigger white-text"><img src="{{URL::asset('media/icons/fa-power.png')}}" style="margin-right: 10px">Logout</a></li>
                    @endif
                    <li class="light-green darken-3" style="margin-left: 5px"><a href="mon-panier.html" class="white-text"><img src="{{URL::asset('media/icons/fa-shopping-cart.png')}}" style="margin-right: 10px">MON PANIER</a></li>
                </ul>

                <ul class="side-nav" id="mobile-demo">
                    <li><a href="{{URL::asset('accueil')}}">ACCUEIL</a></li>
                    <li><a href="{{URL::asset('revues')}}">LA REVUE</a></li>
                    <li><a href="{{URL::asset('articles')}}">PUBLIER UN ARTICLE</a></li>
                    <li><a href="{{URL::asset('evenement')}}">événements</a></li>
                    <li><a href="{{URL::asset('evenements')}}" class="white-text">GESTION(événements)</a></li>
                    @if (Auth::guest())
                    <li class="light-green darken-3"><a href="connexion" class="modal-trigger white-text"><img src="{{URL::asset('media/icons/fa-power.png')}}" style="margin-right: 10px">CONNEXION</a></li>
                    @else
                    <li class="light-green darken-3"><a href="connexion" class="modal-trigger white-text"><img src="{{URL::asset('media/icons/fa-power.png')}}" style="margin-right: 10px">Logout</a></li>
                    @endif
                    <li class="light-green darken-3"><a href="mon-panier.html" class="white-text"><img src="{{URL::asset('media/icons/fa-shopping-cart.png')}}" style="margin-right: 10px">MON PANIER</a></li>
                </ul>

            </div>
        </nav>
        <!-- FIN -->

    </header>

    <!-- contenu principal -->
    @yield('contenu')

    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="josefin-bold white-text">Lambillionea asbl</h5>
                    <p class="grey-text text-lighten-4">Fondée en 2010 par Thierry BOUYER, Jacques HECQ et Auguste FRANCOTTE.
                        <br>(anciennement "Société entomologique namuroise" créée à Namur en 1896)
                        <br>Siège : 57, rue GENOT, B - 4032 Chênée, Belgique .
                        <br><br>E-mail : <a href="#">lambillionea@hotmail.com</a></p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-4">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
            </div>
        </div>
    </footer>
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{URL::asset('js/materialize.js')}}"></script>
<script src="{{URL::asset('js/init.js')}}"></script>

</body>
</html>
