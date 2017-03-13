<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yanoo</title>
        
        <link href="{{ URL::asset('css/material-icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/materialize.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <style>
            @font-face {
                font-family: "Script Mt Bold";
                src        : url("{{ URL::asset('fonts/script_mt_bold/SCRIPTBL.TTF') }}") format("truetype");
            }
            .brand-logo {
                font-family: "Script Mt Bold";
            }
        </style>
        
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/materialize.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.parallax').parallax();
            });
        </script>
        <script src="{{ URL::asset('js/script.js') }}"></script>
    </head>
    <body>
        <!-- Navbar -->
        <div class="navbar-fixed">
            <ul id="projects-dropdown" class="dropdown-content">
                <li><a href="http://localhost/sibengkel/public" class="brown-text text-darken-3">Sibengkel</a></li>
                <li><a href="#!" class="brown-text text-darken-3">two</a></li>
                <li class="divider"></li>
                <li><a href="#!" class="brown-text text-darken-3">three</a></li>
            </ul>
            <nav class="brown darken-3">
                <div class="nav-wrapper">
                    <div class="col s12">
                        <div class="yanoo-brand">
                            <a href="#" class="brand-logo center">Yanoo</a>
                        </div>
                        <ul class="hide-on-med-and-down">
                            <li><a href="sass.html">Sass</a></li>
                            <li><a href="badges.html">Components</a></li>
                            <li>
                                <a class="dropdown-button" href="#!" data-activates="projects-dropdown">Projects<i class="material-icons right">arrow_drop_down</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Contents -->
        <div class="parallax-container">
            <div class="parallax"><img src="{{ URL::asset('images/background/bg5.jpg') }}" style="display: block;"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h2 class="header">Parallax</h2>
                <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action center">
                                <a class="waves-effect waves-light btn">Check it now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Card Title</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="{{ URL::asset('images/background/bg3.jpg') }}" style="display: block;"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h3 class="header center">Members</h3>
                <li class="divider"></li>
                <div class="row yanoo-members">
                    <div class="col s12 m2 offset-m2">
                        <img src="{{ URL::asset('images/avatar1.jpg') }}" class="circle responsive-img">
                    </div>
                    <div class="col s12 m2 offset-m1">
                        <img src="{{ URL::asset('images/avatar1.jpg') }}" class="circle responsive-img">
                    </div>
                    <div class="col s12 m2 offset-m1">
                        <img src="{{ URL::asset('images/avatar1.jpg') }}" class="circle responsive-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="page-footer brown darken-3">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 Copyright Yanoo Corp
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
    </body>
</html>
