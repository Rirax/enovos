<head>
    <link href="/css/dashboard.css" rel="stylesheet" type="text/css">
    <link href="/css/circle.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
    <title>Enoclip - Dashboard</title>
</head>
<div class="container">
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-12 col-sm-3" style="text-align: center">
            <img src="<?=$_SESSION['gravatar'];?>" alt="Pic" class="image-responsive" style="width: 90%;border-radius: 50%; margin: 0 auto;">
        </div>
        <div class="col-xs-12 col-sm-9">
            <h2><?= strtoupper($_SESSION['username'])?></h2>
            <div class="progress" style="position: relative; height: 25px">
                <?php
                    $split = explode('.', $_SESSION['level']);
                ?>
                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$split[1]?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$split[1]?>%; background-color: rgb(255, 121, 0);">

                </div>
                <div style="position: absolute; top: 3px; left: 0; width: 100%; text-align: center;">
                    Niveau <?=$split[0]?> - <?=$split[1]?>%
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item list-group-item-success" style="background: #ddd; color: black"><span style="color: #ff6800">Bravo!</span> Vous avez produit plus d'energie que 72% des habitants de Paris aujourd'hui!</li>
            </ul>
        </div>
    </div>

    <div class="empty"></div>
     <div class="row">
        <div class="col-xs-12 col-sm-6" style="background: rgb(250, 250, 250)">
            <h2>Mon profil</h2>
            <h1 class="text-center" style="color:#ff7900; font-family: Raleway, Helvetica, sans-serif;">Agité</h1>
            <br>
            <p class="text-center">Vous êtes quelqu'un de très actif, vous dégagez beaucoup d'énergie cinétique et nous voulons adapter votre offre à votre mode de vie!</p>
            <button id="button-1" class="buy btn btn-sm  btn-primary tr center-block">En Savoir Plus</button>
    <!--                <br>-->
            <div class="empty"></div>
        </div>
        <div class="col-xs-12 col-sm-6" style="height: 100% ;background: rgb(250, 250, 250)">
        </div>
    </div>

    <div class="row" style="...">
        <div class="col-xs-12 col-sm-6" style="text-align: center">
            <h2 style="text-align: left;">Mon ratio production/consommation d'énergie</h2>
            <strong><span style="color: forestgreen; font-size: 60px; font-family: Raleway, Helvetica, sans-serif;" class="text-center">52 %</span></strong>
        </div>
        <div class="col-xs-12 col-sm-6" style="text-align: center">
            <h2 style="text-align: left;">Mes récompenses</h2>
            <span style="font-size: 60px;">COMING SOON</span>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-12">
            <h2>
                Ma production pour le mois de Mai 2032
                <button class="btn btn-lg tr" data-toggle="modal" data-target="#myModalHorizontal" id="button-1">+</button>
            </h2>
        </div>
        <div class="circles">
            <div class="col-xs-6 col-sm-3">
                <div class="col-xs-12 circle">
                    <div id="circle-wind"></div>
                </div>
                <div class="col-xs-12 under-circle">
                    <span id="wind-value"></span> kWh produits grace au vent ce mois-ci!
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="col-xs-12 circle">
                    <div id="circle-sun"></div>
                </div>
                <div class="col-xs-12 under-circle">
                    <span id="sun-value"></span> kWh produits grace au soleil ce mois-ci!
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="col-xs-12 circle">
                    <div id="circle-temperature"></div>
                </div>
                <div class="col-xs-12 under-circle">
                    <span id="temperature-value"></span> kWh produits grace à la chaleur ce mois-ci!
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="col-xs-12 circle">
                    <div id="circle-sound"></div>
                </div>
                <div class="col-xs-12 under-circle">
                    <span id="sound-value"></span> kWh produits grace au son ce mois-ci!
                </div>
            </div>
        </div>
    </div>
<!--    <div class="row">-->
<!--        <div class="col-xs-12 col-sm-6" style="height: 300px; padding: 30px; background: rgb(250, 250, 250)">-->
<!--            <div style="width: 100%; height: 100%; background: rgba(255, 121, 0, 0.8);"></div>-->
<!--        </div>-->
<!--        <div class="col-xs-12 col-sm-6" style="height: 300px; padding: 30px; background: rgb(250, 250, 250)">-->
<!--            <div style="width: 100%; height: 100%; background: rgba(255, 121, 0, 0.8);"></div>-->
<!--        </div>-->
<!--    </div>-->
    <?php
    echo '<pre>';
    print_r($enovos['data']);
    ?>

</div>
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="border: none;">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <h2 class="text-center">les 5 dernieres mesures</h2>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="/js/circle.js"></script>
<script src="/js/dashboard.js"></script>
