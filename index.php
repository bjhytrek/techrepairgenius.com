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

            <div id="title_well" class="well"> 

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
            <script type="text/javascript">
            function write_content(button_clicked) {
                var output;
                switch(button_clicked) {
                    case 'screen':
                        var output = "Broken Screen? Most laptop screens are easily replaceable, whether crecked or other wise damaged. Cost depends on the model and any other related damage.(broken plastic or hinges, etc. Call or email me for a qoute!";
                        break;
                    case 'socket_repair':
                        var output = "Laptop won't charge? Charger falls out? Charging port broken? Don't worry, I have experience repairing DC Sockets on every type of laptop. Call or email me for a qoute!";
                        break;
                    case 'overheating':
                        var output = "Is your laptop too hot? Does your laptop crash often? This can be a simple, and quick issue to fix! Call or email me for a qoute! ";
                        break;
                    case 'no_display':
                        var output = "Does your computer, or laptop have a blank screen? Does it seem like your laptop screen or monitor isn't getting power? I have expierience troubleshooting most hardware, and software problems. Call or email me for a qoute!";
                        break;
                    default:
                        var output = "Choose a service from the left!";
                        break;
                }
                
                $("#button_output").text(output);
            }
            </script>
            <!-- Responsive Grid System.-->
            <div class="row">
                <div class="col-xs-4 col-md-4 col-lg-3">

                    <div class="btn-group-vertical" role="group" aria-label="Choose a service!">
                        <button type="button" class="btn btn-default btn-lg" onclick="write_content('screen')"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Screen Replacement</button>
                        
                        <button type="button" onclick="write_content('socket_repair')" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> DC Socket Repair</button>
                        
                        <button type="button" onclick="write_content('overheating')" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Overheating</button>
                        
                        <button type="button" onclick="write_content('no_display')" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> No Display</button>
                 </div>
                </div>
                <div class="col-xs-8 col-md-8 col-lg-8">
                    <div id="button_output" class="well">Please select a service!</div>
                </div>
              
            </div>
            
            <div class="row">


                <div class="col-xs-4 col-md-4">
                    <h3><a href="#">Software</a></h3>
                    <p></p>
                    
                </div>
                <div class="col-xs-4 col-md-4">
                    <h3><a href="#">Hardware</a></h3>
                    <p>RANDOM CRAP RAY SAYS</p>
                   
                </div>
                <div class="col-xs-4 col-md-4">
                    <h3><a href="#">A random service.</a></h3>
                    <p>RANDOM CRAP RAY SAYS</p>
                    
                </div>
            </div>


        </div>    
        <!--Footer  -->

        <?php include 'modules/footer.php'; ?>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>







</html>