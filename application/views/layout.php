<!DOCTYPE html>
<html lang="en" ng-app="project">
    <head>
        <meta charset="utf-8">
        <base href="<?php echo base_url(); ?>">
        <title>PR Newswire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="static/css/loading-bar.css" rel="stylesheet">
        <style>
            body {             
            }
        </style>        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script>
            var BASE_URL = "<?php echo base_url(); ?>";
        </script>
    </head>
    <body>
        <nav class="navbar navbar-inverse" ng-show="template">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">        
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" ng-href="{{base_url}}">PR Newswire</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                    
                 
                    <ul class="nav navbar-nav navbar-right">                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Meu perfil</a></li>                                
                                <li class="divider"></li>
                                <li><a href="#" ng-click="logout()">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div>
                <div class="page-header" ng-show="template">
                    <h1>Projects</h1>
                </div>
                <div ng-view></div>
            </div>
        </div>
        <!-- /container -->
        <!-- Le javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.16/angular.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.16/angular-animate.min.js"></script>		
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.16/angular-resource.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.16/angular-route.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="static/js/loading-bar.js"></script>
        <script src="static/js/app.js"></script>
        <script src="static/js/app/services/loginService.js"></script>
        <script src="static/js/app/services/sessionService.js"></script>
    </body>
</html>
