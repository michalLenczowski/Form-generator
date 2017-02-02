<!DOCTYPE html>
<html lang="pl" ng-app="apka">
    <head>     
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forms Generator</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400&subset=latin-ext' rel='stylesheet' type='text/css'>
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link href="css2/font-awesome.min.css" rel="stylesheet">
        <link href="css2/main.css" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.5.8/angular-sanitize.min.js"></script>   
         <script src="javascript2/angular-route.min.js"></script>
       
        <script src="javascript2/main.js"></script>      
        <script src="javascript2/app.js"></script>
        

        <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

    </head>
    <body  ng-controller="mainctrl">
        <div id="outer-wrapper">
            <div id="sidebar">
                <div class="semifluid-layout">
                    <div class="btn-rwd-menu">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="sidebar-logo">
                        <p >Generator formularzy</p>
                    </div>
                    <nav class="sidebar-navigation">
                        <ul>
                            <li ng-class="{active: routetest.isActive('/formularz')}">
                                <a  href="index.php#/formularz">
                                    <i class="fa fa-users"></i>
                                    <span>Generowanie</span>
                                </a>
                            </li>
                            <li ng-class="{active: routetest.isActive('/podglad')}">
                                <a href="index.php#/podglad">
                                    <i class="fa fa-database"></i>
                                    <span>Podgląd formularza</span>
                                </a>
                            </li>
                            <li ng-class="{active: routetest.isActive('/kod')}">
                                <a href="index.php#/kod">
                                    <i class="fa fa-cogs"></i>
                                    <span>Wygenerowany kod</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="sidebar-copyrights">
                        Copyright &copy; Michał Lenczowski 
                    </div>
                </div>
            </div>

            <div id="main">
              <div class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-xs-4 user-area">
                                <p id="tytul">Generator</p>
                            </div>
                        </div>
                    </div>
                </div>             
                 
                <div class="main-content container-fluid"  >
                <div ng-view ></div>
  
                  
                        </div>
                </div>
            </div>
       
    </body>
</html>
