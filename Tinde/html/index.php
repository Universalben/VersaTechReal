<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">  </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="../style/css/index.css">
    <!-- Imported from Scss, ScoutApp-->
    <!-- Navbar font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Gen Font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik|Roboto+Mono" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="logo.bmp">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    
    <!--main nav start-->
    <?php include("header.html"); ?>
    <script>// Animations init
new WOW().init();                    
                    </script>
</nav>
    <!--START result page
 
        <div class="result">
            <div class="container">
                <div class="Imgcar">
                    <div class="row">
                        <div class="col-sm-4">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                     
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="car1.jpg" alt="Los Angeles">
                                    </div>

                                    <div class="item">
                                        <img src="car1.jpg" alt="Chicago">
                                    </div>

                                    <div class="item">
                                        <img src="car1.jpg" alt="New York">
                                    </div>
                                </div>

                         
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="floater">
                                <h2>Grenda i Sirdalen</h2>

                                <p><strong>Pris</strong>:1.200.000 kr
                                </p>
                                <p><strong>Bruttoareal</strong>:64kvm
                                    <p>
                                        <strong>Ant Soverom</strong>:4
                                    </p>

                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <h2>Sirdalshytta</h2>
                            <p>Hytta i sirdalen inneholder verdens beste utsikt og formidable snøforhold gir nok av tid til å stå på ski og kose deg Visning 24.mars for interresenter</p>
                        </div>
                    </div>

                </div>
            </div>
        </div></div>
   END main result page-->
    <main>
    <div class="fullimage"><img src="header.jpg"></div>
        <div class="container">
            <div class="row overflower fontfix">
                <div class="col-sm-4"><h2 class=""><a href="">TOMT</a></h2></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"><h2><a href="#">Prosjekt</a></h2></div>
            </div>
  <div class="row">
                <div class="col-sm-4 black">Something
                </div>
                <div class="col-sm-4 blue">Something</div>
                <div class="col-sm-4 black">Something</div>
            </div>
        </div>
    </main>
<content>
     <!--START show all button-->
    <div class="buttonmoretxt">
        <p>Se alt</p>
    </div>
    <div class="container text-center showbutton">
        <!--Jquery to show .hideable and .showless onClick-->
        <button><img src="http://icons.iconarchive.com/icons/iconsmind/outline/48/Arrow-Down-icon.png"></button>
    </div>
    <script>
        document.querySelector(".showbutton").addEventListener("click", function() {
            document.querySelector(".hideable").style.display = "block";
            document.querySelector(".ShowLess").style.display = "block";
        });

    </script>

    <!--END show all button-->
    <!--START about-->
    <div class="container omoss">
        <div id="omoss"></div>
        <h1 class="text-center paddmore">Vi hjelper deg i gang</h1>
        <div class="row">
            <div class="col-sm-3 ">
                <img src="Omoss1.jpg" alt="...">
                <h4 class="text-center">
                    <h4><strong>Økonomi / regnskap</strong></h4>
                    <p>
                        <span>BRITT UNNI ANDREASSEN BILBEN</span>
                        <span>Tlf: 469 87 310</span>
                        <span>britt@tindeutvikling.no</span>
                    </p>
            </div>
            <div class="col-sm-3">
                <img src="omoss2.jpeg" alt="...">
                <h4><strong>Arb.styreformann</strong></h4>
                <p>

                    <span> ØYVIND HAVERSTAD</span>
                    <span>Tlf: 905 98 289</span>
                    <span>øyvind@tindehytter.no</span>
                </p>
            </div>

            <div class="col-sm-3">
                <img src="omoss3.jpg" alt="...">
                <h4><strong>Daglig leder</strong></h4>
                <p>

                    <span>TORBJØRN RANDEN</span>
                    <span>Tlf: 95030500 </span>
                    <span>tr@tindeutvikling.no</span>
                </p>
            </div>
            <div class="col-sm-3">
                <img src="omoss4.jpg" alt="...">
                <h4><strong>Salgssjef</strong></h4>
                <p>

                    <span>TORE RUGSVEEN</span>
                    <span>Tlf: 457 77 188</span>
                    <span>tore.rugsveen@tindeutvikling.no</span>

                </p>
            </div>
        </div>
          <!--START ABT cont-->
        <div class="well well-lg">
            <h3 class="text-center">Tinde Utvikling</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <div class="text-center"><a href="#kontakt">Kontakt oss</a>
            </div>
        </div>
        <!--END ABT cont-->
    </div>
    <!--END about-->
      <?php include("footer.html"); ?>
    <div>
        <!--START remove hideable button
        <button class="ShowLess"><img src= "http://icons.iconarchive.com/icons/iconsmind/outline/48/Arrow-Up-icon.png"></button></div>
    </div>
    <script>
        document.querySelector(".ShowLess").addEventListener("click", function() {
            document.querySelector(".hideable").style.display = "none";
            document.querySelector(".ShowLess").style.display = "none";
        });

    </script>
   END remove hideable button-->

</body>

</html>