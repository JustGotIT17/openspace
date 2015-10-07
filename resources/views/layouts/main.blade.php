<!DOCTYPE html>
<html ng-app="StarterApp">
    <head>
        <title>Welcome !</title>
        <meta name="viewport" content="initial-scale=1" />
        <link rel="stylesheet" href="{{asset('css/angular-material.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">        
    </head>
    <body>
        <nav id="main">
            <div id="logo">
                <img src="{{asset('images/amarok-logo-small.png')}}">    
                <span>OpenSpace</span>   
            </div>
            <ul id="menu">
                <li><a ui-sref="home">HOME</a></li>
                <li><a ui-sref="services">SERVICES</a></li>
                <li><a ui-sref="about">ABOUT US</a></li>
            </ul>
        </nav>
        <div layout="column">
            <div ui-view class="main-view wrapper">
                @yield('content')
            </div>            
        </div>

        

        <!-- Angular Material Dependencies -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="{{asset('js/angular-ui-router.min.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.9.4/angular-material.min.js"></script>
        <!-- END Angular Material Dependencies -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/ng-scripts.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        
    </body>
</html>
