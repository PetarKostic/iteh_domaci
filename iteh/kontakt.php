        <?php require("view/partials/header.php"); ?>
        <?php include("controller/ProductsController.php"); ?>
        <div class="container-fluid" style="padding-top: 100px;">
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
            <script type="text/javascript">
                var map;

                function initialize() {

                    var latLng = new google.maps.LatLng(44.740889, 20.392849);

                    var mapOptions = {zoom: 12, scrollwheel: false, center: latLng};

                    map = new google.maps.Map(
                            document.getElementById('map'), mapOptions);

                    var marker = new google.maps.Marker({
                        position: latLng, map: map
                    });
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMX9SX9juUGDY51iI3_lF_3yLlSoWHAMM&callback=initMap"
            async defer></script>
            <div class="col-md-12 container">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3 align="center">Kako do nas..<small>Vidi mapu ispod.</small></h3> 
                    <div id="map" style="height:500px"></div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info text-center">
                        <strong><h4>Informacije</h4></strong>
                    </div>
                    <h2 align="center">Zaštita privatnosti</h2>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    PC Press poštuje privatnost svojih korisnika i posetioca portala. Podatke iz procesa registracije, kao i ostale podatke o korisniku, PC Press neće davati na uvid trećoj strani. Podaci o korisniku neće biti dostupni trećem licu, osim u slučaju kada je takva obaveza regulisana zakonom i u slučaju kršenja pravila PC Press-a. Korisnici procesom registracije daju saglasnost da ih PC Press obaveštava o novostima i akcijama. Ukoliko to korisnici ne žele, mogu naglasiti na adresi pc@pcpress.rs<br>
                    <h2 align="center">Komentari korisnika</h2>
                    Komentari korisnika
                    PC Press zadržava pravo da ne objavi komentare kojima se povređuje privatnost nekog lica, uvredljive sadržaje kao i sadržaje koji su u suprotnosti sa Zakonom o javnom informisanju. Takođe, PC Press ne odgovara za komentare korisnika koji su odraz njihovog mišljenja.<br>
                    <h2 align="center">Autorska prava</h2>
                    PC Press polaže autorska prava na sve sadržaje (tekstualne, vdeo i audio snimke, baze podataka, programerski kod). Neovlašćeno korišćenje sadržaja bez dozvole vlasnika autorskih prava, smatra se kršenjem autorskih prava i podložno je tužbi.

                    PC Press zadržava pravo izmene, ukidanja (privremenog i trajnog) bilo kojeg sadržaja ili usluge na portalu bez obaveze prethodne najave.

                    PC Press će odmah razmotriti primedbe posetilaca koji smatraju da im je objavljivanjem sadržaja na PC Press sajtu ugroženo autorsko ili neko drugo pravo. Ukoliko se utvrdi povreda prava, sporni sadržaj biće skinut sa sajta.
                </div>
            </div>
        </div>

        <?php include("view/partials/footer.php"); ?>