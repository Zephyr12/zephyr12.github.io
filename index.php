<?php
$requestPage = $_GET['p'];

$titlesArray['home'] = "Financial Computing &amp; Analytics";
$taglinesArray['home'] = "Home Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";

$titlesArray['scalculus'] = "Stochastic Calculus";
$taglinesArray['scalculus'] = "Stochastic Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";

$titlesArray['btech'] = "Blockchain Technology";
$taglinesArray['btech'] = "Blockchain Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";

$titlesArray['atrading'] = "Algorithmic Trading";
$taglinesArray['atrading'] = "Algorithmic Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";

$titlesArray['ptheory'] = "Portfolio Theory";
$taglinesArray['ptheory'] = "Portfolio Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";

$titlesArray['mlearning'] = "Machine Learning";
$taglinesArray['mlearning'] = "Machine Learning Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";

$titlesArray['ourteam'] = "Our Team";
$taglinesArray['ourteam'] = "Our Team Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";

$titlesArray['references'] = "References";
$taglinesArray['references'] = "References Tagline - Contrary to popular belief, this topic actually could be quite interesting if we can come up with a catchy tagline - although we'll definitely need to spend some time on that.";


if ($requestPage && $titlesArray[$requestPage]) {
    $title = $titlesArray[$requestPage];
    $tagline = $taglinesArray[$requestPage];
    $contentFile = "pages/".$page.".html";
    $imageFile = "pages/img/".$page.".jpg";
} else {
    $title = "File Not Found";
    $tagline = "The file you're looking for cannot be found...";
    $contentFile = "pages/filenotfound.html";
    $imageFile = "pages/img/home.jpg";
}
?>
<!DOCTYPE html>

<html>
    <head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Droid+Sans" type="text/css"/>
        <link rel="stylesheet" href="lib/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css"/>
        <script type="text/javascript" src="main.js"></script>
        <link rel="stylesheet" href="main.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#2c3e50">
        <title><?php echo($title); ?> - Financial Computing</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-content">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?p=home">Financial Computing</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-content">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          Research Topics <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="index.php?p=atrading">Algorithmic Trading</a></li>
                            <li><a href="index.php?p=btech">Blockchain Technlogy</a></li>
                            <li><a href="index.php?p=mlearning">Machine Learning</a></li>
                            <li><a href="index.php?p=ptheory">Portfolio Theory</a></li>
                            <li><a href="index.php?p=scalculus">Stochastic Calculus</a></li>
                            <!--
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Sub header</li>
                            -->
                          </ul>
                        </li>
                        <li><a href="index.php?p=ourteam">Our Team</a></li>
                        <li><a href="index.php?p=references">References</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron animated" style="background-image: url(<?php echo($imageFile); ?>) !important;" id="jumbotron-area">
        <div class="container animated" id="sitetitle">
            <h1><?php echo($title); ?></h1>
            <p>
                <?php echo($tagline); ?>
            </p>
        </div>
        </div>
        <div class="container animated" id="content" style="margin-top: 1em; min-height: 1000px">
            <?php include($contentFile); ?>
        </div>
        <hr />
        <div class="container">
        <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 UCL CS Team A</p>
      </footer>
</div>
    </body>
</html>