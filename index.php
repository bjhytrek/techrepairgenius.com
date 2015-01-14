<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tech Repair Genius</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tech Repair Genius, Rexburg. Idaho">
        <meta name="author" content="Techrepairgenius.com">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>
        <div id="main_container" class="container">
            
            <div id="title_well"class="well"> 
                       
                        <a href="index.php">
                            <img id="logo" src="media/logo.png" alt="TechRepairGenius.com">
                    </a>
                        
                    <h1>Tech Repair Genius</h1>
                    <p>-Free Estimates, Fast Service.</p>
                </div>
                
                 
                   
            
        
            <!--Header with Navbar  -->	


            <div class="navbar navbar-inverse navbar-static-top" role="navigation" id="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand" id="nav_title"></a><a href="index.php" class="navbar-brand" id="nav_title">Tech Repair Genius</a>
                        <button type="button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target= ".navbar-collapse">
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                        </button>
                    </div>
                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <!--for mobile navbar display-->
                        <ul class = "nav navbar-nav navbar-left">

                            <li class = "active"><a href="#">Home</a></li>
                            <li><a href="#">Repairs</a></li>
                            <li><a href="#">Custom Builds</a></li>
                            <li><a href="#contact" data-toggle="modal">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>




            <div id="carousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="" data-slide-to="0" class="active"></li>
                    <li data-target="" data-slide-to="1"></li>
                    <li data-target="" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="imageClip" src="media/slides/supported_products.jpg" alt="Windows 7, 8 and Mac/Apple Support.">

                    </div>
                    <div class="item">
                        <img class="imageClip" src="media/slides/supported_brands.jpg" alt="I support MSI, ACER, DELL, SAMSUNG, iPHONE, iPAD, SONY, ASUS, TOSHIBA, LENOVO, GATEWAY, COMPACT, and many more Brands!">

                    </div>
                    <div class="item">
                        <img class="imageClip"src="media/slides/support.jpg" alt="I support most computers, and electronics!">

                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>


            <!-- Main content-->

            <!-- Responsive Grid System.-->
            <div class="row">
                <div class="col-xs-6 col-md-6">
                <ul class="list-group">
                    <li>Screen Replacement</li>
                    <li>DC Socket Repair</li>
                    <li>Overheating</li>
                    <li>No Display</li>
                    <li></li>
                </ul>
                    </div>
                <div class="col-xs-6 col-md-6">
                    
                </div>
            </div>
            <div class="row">
                

                <div class="col-xs-4 col-md-4">
                    <h3><a href="#">Software</a></h3>
                    <p>RANDOM CRAP RAY SAYS</p>
                    <a href="#" class="btn btn-warning">Buy Now!</a>
                </div>
                <div class="col-xs-4 col-md-4">
                    <h3><a href="#">Hardware</a></h3>
                    <p>RANDOM CRAP RAY SAYS</p>
                    <a href="#" class="btn btn-warning">Buy Now!</a>
                </div>
                <div class="col-xs-4 col-md-4">
                    <h3><a href="#">A random service.</a></h3>
                    <p>RANDOM CRAP RAY SAYS</p>
                    <a href="#" class="btn btn-warning">Buy Now!</a>
                </div>
            </div>


        </div>    
        <!--Footer  -->

        <?php include 'modules/footer.php'; ?>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>







</html>