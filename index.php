<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Climar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/clima.js"></script>
        <meta name="DESCRIPTION" content="Projeto de informações climáticas de Brusque desenvolvido por Pedro Henrique Montibeller no SENAI-SC"/>
        <meta name="ABSTRACT" content="Informações climáticas"/>
        <meta name="keywords" content="projeto senai, temperatura de brusque, tempo em brusque, clima de brusque, por do sol de brusque, anoitecer de brusque, pressão de brusque, pedro montibeller, temperatura de brusque, umidade de brusque, maxima de brusque, clima, tempo, situação de brusque"/>
        <meta name="title" content="Projeto Clima SENAI" />
        <meta name="identifier-url" content="https://arthur-clima-senai.herokuapp.com/" />
        <meta name="author" content="Arthur Westphal Joaquim" />
        <meta name="ROBOTS" content="All" />
        <meta name="RATING" content="general" />
        <meta name="DISTRIBUTION" content="global" />
        <meta name="LANGUAGE" content="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" />
        <meta name="reply-to" content="https://arthur-clima-senai.herokuapp.com/"/>
        <meta property="og:url" content="https://arthur-clima-senai.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Projeto Clima SENAI" />
        <meta property="og:title" content="Projeto Clima SENAI" />
        <meta property="og:description" content="Projeto de informações climáticas de Brusque desenvolvido por Pedro Henrique Montibeller no SENAI-SC" />
        <meta property="og:image" content="https://arthur-clima-senai.herokuapp.com/" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Projeto de informações climáticas de Brusque desenvolvido por Pedro Henrique Montibeller no SENAI-SC" />
        <meta name="twitter:title" content="Projeto Clima SENAI" />


    </head>
    <body>
        <div class="alert alert-danger mt-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Cuidado!</strong> Temperatura muito elevada, se cuide!!
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron bg-success">
                    <h1>Tempo para Brusque-SC | <span id="temperatura"></span></h1>
                    <p>
                        <span id="situacao"></span>
                        <img id="icone" src="img/icones/02d.png">
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Umidade do ar | <span id="umidade"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/uAr.png" width="100px">
                </div>
                <div class="col">
                    <h2>Pressão do ar | <span id="pressaoVento"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/pAr.png" width="100px">
                </div>
                <div class="col">
                    <h2>Temperatura Máxima | <span id="tempMax"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/tMax.png" width="100px">
                </div>
                <div class="col">
                    <h2>Temperatura Mínima | <span id="tempMin"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/tMin.png" width="100px">
                </div>
                <div class="col">
                    <h2>Velocidade do vento | <span id="velocidadeVento"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/vv.png" width="100px">
                </div>
                <div class="col">
                    <h2>Amanhecer | <span id="amanhecer"></span></h2>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/vv.png" width="100px">
                </div>
            </div>
        </div>
    </body>
</html>
