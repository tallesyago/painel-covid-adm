<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="expires" content="Mon, 26 Jul 1997 05:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <link rel="stylesheet" href="/assets/dist/leaflet-search.css" />
    <link rel="icon" href="/assets/images/virus.png">
    <title>Painel COVID-MG</title>

    <style>
        #map {
            min-height: 600px;
            max-height: 800px
        }

        a.disable-links {
            pointer-events: none;
        }
    </style>
</head>

<?php if (isset($casos)) { ?>

    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0&appId=204305290231388&autoLogAppEvents=1"></script>

        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">Sobre o projeto</h4>
                            <p class="text-muted"> Painel de Informações e Emissão de Alertas no Enfrentamento ao COVID-19 nas Microrregiões de Ubá e Juiz de Fora</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Menu</h4>
                            <ul class="list-unstyled">
                                <li><a href="home/projetos" class="text-white">Projetos</a></li>
                                <li><a href="home/dicas" class="text-white">Dicas</a></li>
                                <li><a href="home/doacao" class="text-white">Doação</a></li>
                                <li><a href="home/login" class="text-white">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="/home" class="navbar-brand d-flex align-items-center">
                        <strong>
                            <h6>COVID-19/MINAS GERAIS</h6>
                        </strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>

        <main role="main">
            <div class="container">
                <section class="jumbotron text-center p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Buscar</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= esc($casos['nomeMunicipio']) ?></li>
                    </ol>
                    <h2 class="jumbotron-heading">Painel CoronaVírus</h2>
                    <p class="lead text-muted">Última Atualização em </p>
                    <p class="subtext"><strong><?php echo $casos['created_at'] ?></strong></p>
                </section>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-borda-azul animated bounceInUp slow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="cor1"><?php if (isset($casos['suspeitosCaso'])) echo $casos['suspeitosCaso'];
                                                            else echo '0'; ?></h3>
                                        <p class="subtext">Casos Suspeitos</p>
                                    </div>
                                    <div class="col">
                                        <img class="img" src="/assets/images/resultado.png" width="70" height="70" align="right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-borda-amarelo animated bounceInUp slow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="cor2"><?php if (isset($casos['confirmadosCaso'])) echo $casos['confirmadosCaso'];
                                                            else echo '0'; ?></h3>
                                        <p class="subtext">Confirmados</p>
                                    </div>
                                    <div class="col">
                                        <img class="img" src="/assets/images/pesquisa.png" width="70" height="70" align="right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-borda-verde animated bounceInUp slow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="cor3"><?php if (isset($casos['descartadosCaso'])) echo $casos['descartadosCaso'];
                                                            else echo '0'; ?></h3>
                                        <p class="subtext">Casos Descartados</p>
                                    </div>
                                    <div class="col">
                                        <img class="img" src="/assets/images/cancelar.png" width="70" height="70" align="right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-borda-vermelho animated bounceInUp slow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="cor4"><?php if (isset($casos['obitosCaso'])) echo $casos['obitosCaso'];
                                                            else echo '0'; ?></h3>
                                        <p class="subtext">Casos de Óbitos</p>
                                    </div>
                                    <div class="col">
                                        <img class="img" src="/assets/images/certidao-de-obito.png" width="70" height="70" align="right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="card animated bounceInUp slow delay-1s">
                            <div class="card-body">
                                <h5 class="subtext">Mapa</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Visualize diversas informações sobre seu município no mapa interativo</h6>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card animated bounceInUp slow delay-1s">
                            <div class="card-body">
                                <h5 class="subtext">Noticias</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Atualize-se com infomações oficias</h6>
                                <!-- alterar as referencias da div pro campo da tabela municipio que contem o identificador da pagina -->
                                <div class="fb-page" data-href="https://www.facebook.com/<?= $casos['facebookMunicipio'] ?>" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                                    <blockquote cite="https://www.facebook.com/<?= $casos['facebookMunicipio'] ?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/<?= $casos['facebookMunicipio'] ?>">Município de Rio Pomba - Prefeitura</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card animated bounceInUp slow delay-1s">
                            <div class="card-body">
                                <h5 class="subtext">Gráficos</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Acompanhe a evolução de casos em seu munícipio</h6>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Confirmados</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="profile" aria-selected="false">Suspeitos</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu2" role="tab" aria-controls="contact" aria-selected="false">Descertados</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu3" role="tab" aria-controls="contact" aria-selected="false">Óbitos</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu3" role="tab" aria-controls="contact" aria-selected="false">Recuperados</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h3>HOME</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h3>Menu 1</h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>Menu 2</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <h3>Menu 3</h3>
                                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" align="center">
                            <img class="img" src="images/hospital.png"width="70" height="70" alt="">          
                            <h5 class="subtext">Unidade Saúde</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Encontre as mais próximas de você</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" align="center">
                            <img class="img" src="images/hospital.png"width="70" height="70" alt="">          
                            <h5 class="subtext">Unidade Saúde</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Encontre as mais próximas de você</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" align="center">
                            <img class="img" src="images/hospital.png"width="70" height="70" alt="">          
                            <h5 class="subtext">Unidade Saúde</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Encontre as mais próximas de você</h6>
                        </div>
                    </div>
                </div> 
            </div> -->
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        <script src="/assets/dist/leaflet-search.js"></script>
        <script src="/assets/data/mg-geojson.js"></script>
        <script src="/assets/dist/BoundaryCanvas.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


        <script>
            var geojson;
            //valores exemplos definidos em mg-geojson.js
            $(document).ready(function() {
                nome = '<?= $casos['nomeMunicipio'] ?>';
                nome = nome.normalize("NFD").replace(/[\u0300-\u036f]/g, "")
                nome = nome.toLowerCase();
                nome = nome.replace(/ /g, '-')
                $.getJSON(
                    'https://servicodados.ibge.gov.br/api/v1/localidades/municipios/' + nome,
                    function(data) {
                        id = data['id'];

                        link = "https://servicodados.ibge.gov.br/api/v2/malhas/" + id + "?formato=application/vnd.geo+json";
                        $.getJSON(link,
                            function(data) {
                                console.log(data);
                                geojson = data['features']['0']['geometry'];
                                coordinate = geojson['coordinates'][0][0];

                                test(parseFloat(coordinate[1]), parseFloat(coordinate[0]));
                                console.log(parseFloat(coordinate[0]), parseFloat(coordinate[1]));
                            })
                    }
                );
                // setTimeout(function(){ alert("Hello"); }, 3000);
            });

            function test(latitude, longitude) {
                var data = geojson;
                console.log(data + "datae")

                var map = L.map('map').setView([latitude, longitude], 9),
                    osmUrl = 'https://{s}.tile.osm.org/{z}/{x}/{y}.png',
                    osmAttribution = '';

                var osm = L.TileLayer.boundaryCanvas(osmUrl, {
                    boundary: geom,
                    attribution: osmAttribution,
                    trackAttribution: true
                }).addTo(map);



                var featuresLayer = new L.GeoJSON(data, {
                    style: function(feature) {
                        return {
                            color: '#FF0000'
                        };
                    },
                    onEachFeature: function(feature, marker) {
                        marker.bindPopup('<p>Confirmados: <?= $casos['confirmadosCaso'] ?></p>' +
                            '<p>Suspeitos: <?= $casos['suspeitosCaso'] ?></p>' +
                            '<p>Descartados: <?= $casos['descartadosCaso'] ?></p>' +
                            '<p>Obitos: <?= $casos['obitosCaso'] ?></p>' +
                            '<p>Recuperados: <?= $casos['recuperadosCaso'] ?></p>');
                    }
                });

                map.addLayer(featuresLayer);

                //     var searchControl = new L.Control.Search({
                //         layer: featuresLayer,
                //         propertyName: 'name',
                //         marker: false,
                //         moveToLocation: function(latlng, title, map) {
                //             //map.fitBounds( latlng.layer.getBounds() );
                //             var zoom = map.getBoundsZoom(latlng.layer.getBounds());
                //             map.setView(latlng, zoom); // access the zoom
                //         }
                //     });

                //     searchControl.on('search:locationfound', function(e) {

                //         //console.log('search:locationfound', );

                //         //map.removeLayer(this._markerSearch)

                //         e.layer.setStyle({
                //             fillColor: '#3f0',
                //             color: '#0f0'
                //         });
                //         if (e.layer._popup)
                //             e.layer.openPopup();

                //     }).on('search:collapsed', function(e) {

                //         featuresLayer.eachLayer(function(layer) { //restore feature color
                //             featuresLayer.resetStyle(layer);
                //         });
                //     });

                //     map.addControl(searchControl); //inizialize search control
            }
        </script>

        <script type="text/javascript" src="/assets/dist/labs-common.js"></script>
    </body>

</html>
<?php } else echo ("<script LANGUAGE='JavaScript'>
    window.alert('Ainda não foram encontrados dados para a cidade selecionada');
    window.location.href='/home';
    </script>"); ?>