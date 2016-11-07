<?php
$requestPage = $_GET['p'];

$titlesArray['home'] = "Financial Computing &amp; Analytics";
$taglinesArray['home'] = "The backbone of the modern financial industry.";

$titlesArray['scalculus'] = "Stochastic Calculus";
$taglinesArray['scalculus'] = "Mathematics dedicated to predicting how random motion will behave in the future.";

$titlesArray['btech'] = "Blockchain Technology";
$taglinesArray['btech'] = "With this emerging innovation, we could get rid of banking systems as we see them today, and look forward to a more secure financial future.";

$titlesArray['atrading'] = "Algorithmic Trading";
$taglinesArray['atrading'] = "Imagine a world where you'd pay $1.5 billion to reduce your reaction time by 60 milliseconds.";

$titlesArray['ptheory'] = "Portfolio Theory";
$taglinesArray['ptheory'] = "A modern approach to make the most of our money.";

$titlesArray['mlearning'] = "Machine Learning";
$taglinesArray['mlearning'] = "Machine Learning - Getting the computer to do the hard work so you don't have to";

$titlesArray['ourteam'] = "Our Team";
$taglinesArray['ourteam'] = "&quot;Coming together is a beginning. Keeping together is progress. Working together is success.&quot;<br /> - <i>Henry Ford</i>";

$titlesArray['references'] = "References";
$taglinesArray['references'] = "We couldn't have built this site without a few good people, and a few good projects.";

if(!$requestPage) {
    $requestPage = "home";
}

if ($titlesArray[$requestPage]) {
    $title = $titlesArray[$requestPage];
    $tagline = $taglinesArray[$requestPage];
    $contentFile = "pages/".$requestPage.".html";
    $imageFile = "pages/img/".$requestPage.".jpg";
} else {
    header("HTTP/1.0 404 Not Found");
    $title = "File Not Found";
    $tagline = "The file you're looking for cannot be found...";
    $contentFile = "pages/filenotfound.html";
    $imageFile = "pages/img/home.jpg";
}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Droid+Sans" type="text/css"/>
        <link rel="stylesheet" href="lib/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css"/>
        <script type="text/javascript" src="main.js"></script>
        <link rel="stylesheet" href="main.css" type="text/css"/>
        
        <meta name="theme-color" content="#2c3e50">
        <title><?php echo( $requestPage=="home" ? "Home" : $title ); ?> - Financial Computing</title>
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
                            <li><a href="index.php?p=btech">Blockchain Technology</a></li>
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
        <p class="text-center">&copy; 2016 UCL CS Team A where possible. <a href="index.php?p=references">Sources of other content.</a></p>
      </footer>
</div>
    </body>
</html>
