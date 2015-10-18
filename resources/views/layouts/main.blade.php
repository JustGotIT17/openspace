<!DOCTYPE html>
<html ng-app="StarterApp">
    <head>
        <title>Welcome !</title>
        <meta name="viewport" content="initial-scale=1" />
        <link rel="stylesheet" href="{{asset('lib/semantic_ui/dist/semantic.min.css')}}">
        <link rel="stylesheet" href="{{asset('lib/bower_components/lumx/dist/lumx.css')}}">        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">        
    </head>
    <body>
        <div ng-controller="HomeController">
            <nav id="main">
                <div id="logo" class="animated fadeInDown">
                    <img src="{{asset('images/amarok-logo-small.png')}}">    
                    <span>OpenSpace</span>
                    <small style="display:flex; flex-flow:row wrap;align-items:center; margin-left:5px;" class="animated infinite jello">alpha</small>
                </div>
                <ul id="menu" class="animated fadeInDown">
                    <li><a ui-sref="home">Home</a></li>
                    <li><a ui-sref="services">Services</a></li>
                    <li><a ui-sref="about">About</a></li>
                </ul>
                <lx-dropdown position="right" ng-show="user.id.length > 0">
                    <button class="btn btn--l btn--black btn--icon" lx-ripple lx-dropdown-toggle>
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <lx-dropdown-menu>
                        <ul>
                            <li class="animated fadeInUp"><a class="dropdown-link"><i class="mdi mdi-account-box"></i>@{{user.firstname.concat(" ", user.lastname)}}</a></li>
                            <li class="animated fadeInUp"><a class="dropdown-link"><i class="mdi mdi-settings"></i>Settings</a></li>
                            <li class="animated fadeInUp"><a class="dropdown-link"><i class="mdi mdi-library-plus"></i>Contributions</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="animated fadeInUp"><a class="dropdown-link" ui-sref="signout"><i class="mdi mdi-logout"></i>Sign Out</a></li>
                        </ul>
                    </lx-dropdown-menu>
                </lx-dropdown>
            </nav>
            <div class="ui grid margin-top-xxl">
                <div ui-view class="fourteen wide column centered animated fadeInLeft margin-top-xxl">                    
                    @yield('content')
                </div>
            </div>            
        </div>
        <footer id="main">
            <section class="ui stackable three column centered grid">
                <section class="column">
                    <header>
                        <h3>Mission</h3>
                    </header>
                    <p class="margin-top-sm">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <header>
                        <h3>Vision</h3>
                    </header>
                    <p class="margin-top-sm">
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </section>
                <section class="column">
                    <header>
                        <h3>Location Address</h3>
                    </header>
                    <p class="margin-top-sm">
                        Quezon City<br/>
                        Metro Manila,
                        Philippines
                    </p>
                    <header>
                        <h3>Contact Details</h3>
                    </header>
                    <p class="margin-top-sm">
                        <i class="mdi mdi-phone"></i> <span>000-0000</span>
                        <br/>
                        <i class="mdi mdi-cellphone"></i> <span>+63900-000-0000</span>
                        <br/>
                        <i class="mdi mdi-email"></i> <span>support@openspace.org</span>
                    </p>
                </section>

                <section class="column">
                    <header>
                        <h3>Connect</h3>
                    </header>
                    <div class="flex-row centered margin-top-sm">
                        <i class="icon icon--m icon--indigo icon--circled facebook"></i>
                        <i class="icon icon--m icon--blue icon--circled twitter"></i>
                        <i class="icon icon--m icon--brown icon--circled instagram"></i>
                    </div>
                    <p class="margin-top-sm"><small>All rights reserved. &copy 2015</small></p>
                    <p><small>Developed by Jeffrey Ocampo</small></p>
                    <p><small>Powered by <a href="http://www.laravel.com/" style="color:rgb(250, 138, 69);">Laravel</a></small></p>  
                </section>
            </section>
        </footer>
        <!-- Angular Material Dependencies -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('lib/bower_components/velocity/velocity.js')}}"></script>
        <script src="{{asset('lib/bower_components/moment/min/moment-with-locales.js')}}"></script>
        <script src="{{asset('lib/bower_components/angular/angular.js')}}"></script>
        <script src="{{asset('lib/semantic_ui/dist/semantic.min.js')}}"></script>
        <script src="{{asset('lib/bower_components/lumx/dist/lumx.js')}}"></script>
        <script src="{{asset('js/angular-ui-router.min.js')}}"></script>
        <!--
        <script src="{{asset('js/modules/angular-animate.min.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.9.4/angular-material.min.js"></script>
        <script src="{{asset('js/controllers/dashboardcontroller.js')}}"></script>
        <!-- END Angular Material Dependencies -->
        <script src="{{asset('js/modules/home.js')}}"></script>
        <script src="{{asset('js/modules/middleware/dialog.js')}}"></script>
        <script src="{{asset('js/modules/middleware/user.js')}}"></script>
        <script src="{{asset('js/modules/middleware/application.js')}}"></script>
        <script src="{{asset('js/ng-scripts.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        
    </body>
</html>
