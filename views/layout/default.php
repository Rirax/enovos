<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="/img/favicon/favicon.png" />
        <link href="/css/layout.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--        <link href="/css/grid.css" rel="stylesheet" type="text/css" />-->
    </head>

    <body>
        <header>
            <nav>
                <div class="container">
                    <div class="bar" id="bar">
                        <div class="brand" style="height: 48px; width: 27px;">
                            <img src="/img/favicon/favicon.png" alt="ENOVOS" style="height: 60%; width: auto; margin-top: 60%">
                        </div>
                        <div class="mobile-nav" id="mobile-nav-icon">
                            <i class="fa nav-icon"></i>
                        </div>
                    </div>
                    <div class="main-nav" id="menu">
                        <ul id="nav-left">
                            <li>
                                <a id="home-link" href="#top">ACCUEIL</a>
                            </li>
                            <div id="navs">
                                <li>
                                    <a href="#section-introduction">ENOCLIP</a>
                                </li>
                                <li>
                                    <a href="#section-concept">MYENOVOS</a>
                                </li>
                                <li>
                                    <a href="#social-media">SUIVEZ-NOUS</a>
                                </li>
                            </div>
                        </ul>
                        <ul class="nav-right">
                            <?php if (isset($_SESSION['username'])):?>
                            <li>
                                <a href="/enovos/dboard">
                                    <img src="<?=$_SESSION['gravatar'];?>" alt="Pic">
                                    PROFIL
                                </a>
                            </li>
                            <li>
                                <a href="/user/logout">DECONNEXION</a>
                            </li>
                            <?php else : ?>
                            <li>
                                <a href="/user/signin">CONNEXION</a>
                            </li>
                            <li>
                                <a href="/user/signup">INSCRIPTION</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php echo $content_for_layout;?>

<!--        <footer>COPYRIGHT @ 2016 - ENOVOS MADE BY VALLIUM</footer>-->
    </body>
    <script src="/js/layout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $('a').click(function(){
            if (!$(this).attr('href'))
                return false;

            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 500);
            return false;
        });
    </script>
</html>
