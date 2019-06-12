<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link href="https://fonts.googleapis.com/css?family=Dosis|Lato|Montserrat|Open+Sans|Quicksand&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Who Dis?</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <!-- <ul>
          <li>AAA</li>
          <li>AAA</li>
          <li>AAA</li>
          <li>AAA</li>
        </ul> -->        
        </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>Identify Geographical Location by IP Address</h1>
        
      </div>
    </div>

    <div class="container maincontent">
      <div class="form-ip container">
        <form class="form-horizontal eee" action="">
          <fieldset>
            <div class="form-group">
              <div class="col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fas fa-chess-knight"></i>
                  </span>
                  <input id="getipvalue" name="getipvalue" class="form-control" placeholder="Ex: 127.0.0.1" type="text">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="getipdata-btn"></label>
              <div class="col-xs-12">
                <button id="getipdata-btn" name="getipdata-btn" class="btn btn-success">Get Details</button>
              </div>
            </div>
          </fieldset>
        </form>

      </div>
      <hr>

      <div class="container">
        <div class="ipdata" id="ipdata"></div>
      </div>

<hr>
      
    </div>

    <footer class="container">
        <p>&copy; <?php echo date('Y') ?> V</p>
      </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>
