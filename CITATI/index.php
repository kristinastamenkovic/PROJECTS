<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citati</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <div class="container-fluid">
        <h1 class="text-white text-center font-weight-lighter">Mudre misli | Izreke | Poslovice</h1>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php
                   
                    function prikaziSliku(){

                        $slike = array('images/17.jpg','images/19.jpg','images/20.jpg','images/21.jpg','images/22.jpg','images/23.jpg','images/24.jpg','images/25.jpg','images/26.jpg','images/27.jpg','images/28.jpg','images/29.jpg','images/30.jpg','images/31.jpg','images/32.jpg','images/33.jpg','images/34.jpg','images/35.jpg','images/36.jpg','images/37.jpg');
                        $randIndex = array_rand($slike);
                        echo "<img src='$slike[$randIndex]' class='mx-auto d-block w-50' style='height:160px'>";
                        
                    }
                ?>
                <div class="carousel-item active">
                    <?php
                        prikaziSliku();
                    ?>
                
                </div>
                <div class="carousel-item">
                    <?php
                        prikaziSliku();
                    ?>
                </div>
                <div class="carousel-item">
                    <?php
                        prikaziSliku();
                    ?>
                    </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

            </div>

        </div>
    <div class="container-fluid d-flex justify-content-center">
    <!-- Nav pills -->
        <ul class="nav nav-pills bg-white justify-content-center mt-2 col-sm-12" role="tablist">
            <li class="nav-item col-lg-2">
            <a class="nav-link" data-toggle="pill" href="#posao"><h4 class="font-weight-lighter"> <i class="fas fa-book"></i> Posao </h4></a>
            </li>
            <li class="nav-item col-lg-2">
            <a class="nav-link" data-toggle="pill" href="#ljubav"><h4 class="font-weight-lighter"> <i class="fas fa-heart"></i> Ljubav </h4></a>
            </li>
            <li class="nav-item col-lg-2">
            <a class="nav-link" data-toggle="pill" href="#zdravlje"><h4 class="font-weight-lighter"> <i class="fas fa-apple-alt"></i> Zdravlje </h4></a>
            </li>
            <li class="nav-item col-lg-2">
            <a class="nav-link" data-toggle="pill" href="#motivacija"><h4 class="font-weight-lighter"> <i class="fas fa-cloud"></i> Motivacija </h4></a>
            </li>
            <li class="nav-item col-lg-2 ">
            <a class="nav-link" data-toggle="pill" href="#prijateljstvo"><h4 class="font-weight-lighter"> <i class="fas fa-seedling"></i> Prijateljstvo </h4></a>
            </li>
        </ul>
    </div>

        
    <div class="container" >
    
        <!-- Tab panes -->
        <div class="tab-content">
            <?php
                function ispisiCitat($text){
                            
                    $citati = explode("\n", $text);
                    $randArrayIndexNum = array_rand($citati);
                    if($randArrayIndexNum % 2 == 0){
                        echo "<p class='text-white text-center font-italic display-4'> $citati[$randArrayIndexNum]  </p>";
                        $randArrayIndexNum++;
                        echo "<p><h4 class='font-weight-lighter text-light text-center'> $citati[$randArrayIndexNum] </h4></p>";
                    }
                    else{
                        $randArrayIndexNum--;
                        echo "<p class='text-white text-center font-italic display-4'> $citati[$randArrayIndexNum]  </p>";
                        $randArrayIndexNum++;
                        echo "<p><h4 class='font-weight-lighter text-light text-center'> $citati[$randArrayIndexNum] </h4> </p>";
                    }
                }

            ?>
            <div class="container tab-pane active"><br>
                <?php 
    
                    $text = file_get_contents('sviCitati.txt');
                    ispisiCitat($text);

                ?>
            </div>
            <div id="posao" class="container tab-pane fade"><br>
                <?php
                    
                    $text = file_get_contents('posao.txt');
                    ispisiCitat($text);

                ?>
            </div>
            <div id="ljubav" class="container tab-pane fade"><br>
                
                <?php
                
                    $text = file_get_contents('ljubav.txt');
                    ispisiCitat($text);

                ?>

            </div>
            <div id="zdravlje" class="container tab-pane fade"><br>

                <?php
                    
                    $text = file_get_contents('zdravlje.txt');
                    ispisiCitat($text);

                ?>
            </div>

            <div id="motivacija" class="container tab-pane fade"><br>
                
                <?php
                
                    $text = file_get_contents('motivacija.txt');
                    ispisiCitat($text);

                ?>

            </div>
            <div id="prijateljstvo" class="container tab-pane fade"><br>
                
                <?php
                
                    $text = file_get_contents('prijateljstvo.txt');
                    ispisiCitat($text);

                ?>

            </div>

        </div>

    </div>
    <div class="container-fluid fixed-bottom clearfix">
        <?php
            $d = date('d');
            $m = date('m');
            $y = date('Y');
            $sat = date('h');
            $min = date('i');
            $a = date('a');
            echo "<span  class='float-left text-center text-white shadow-lg p-4 mb-4'><h5 class='font-weight-lighter'> $d/$m/$y </h5></span>";
            echo "<span  class='float-right text-center text-white shadow-lg p-4 mb-4'>  <i class='far fa-clock'></i> &nbsp <h5 class='font-weight-lighter d-inline'>$sat:$min&nbsp$a</h5> </span>";
        ?>
    </div>
</body>
</html>