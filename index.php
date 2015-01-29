<!DOCTYPE html>
<html lang="en">
    <?php include 'modules/header.php'; ?>

<?php $active_page
                = 0; ?>


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
            var output_content;

            switch (button_clicked) {
                case 'screen':
                    var output_heading = "Screen Replacement";
                    var output_content = "Broken Screen? Most laptop screens are easily replaceable, whether cracked or otherwise damaged. Cost depends on the model and any other related damage (Broken plastic or hinges, etc). Call or email me for a quote!";
                    break;
                case 'socket_repair':
                    var output_heading = "DC Socket Repair";
                    var output_content = "If you are having trouble getting your laptop to charge, it may need work on the power jack. Costs depends on a number of factors, including age of machine and parts involved. Call, text or email me for a quote!";
                    break;
                case 'overheating':
                    var output_heading = "Overheating";
                    var output_content = "If your laptop gets too hot, it may shut down in the middle of use. This is usually caused by dirty/damaged fans or vents, and/or aged thermal compound. An estimate will be needed to determine the exact cause. Call or email me for a quote! ";
                    break;
                case 'no_display':
                    var output_heading = "No Display";
                    var output_content = "Does your computer, or laptop have a blank screen? Does it seem like your laptop screen or monitor isn't getting power? I have experience troubleshooting most hardware, and software problems. Call or email me for a quote!";
                    break;
                default:
                    var output_heading = "Choose a service from the left!";
                    var output_content = "";
                    break;
            }
            $("#button_output_heading").text(output_heading);
            $("#button_output_content").text(output_content);
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
        <div class="col-xs-9 col-sm-8 col-md-8 col-lg-9">
            <div  class="well"><h3 id="button_output_heading">Please select a service!</h3><p  id="button_output_content"></p></div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">

            <div class="thumbnail">
                <a href="repairs.php" class="thumbnail" >
                    <img src="media/repair_page/broken_screen.jpg" alt="Hardware Repairs">
                </a>
                <div class="caption">
                    <h3>Hardware Repairs</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <a href="repairs.php" class="thumbnail" >
                <img src="media/repair_page/slow-computer.jpg" alt="Software Repairs">
                </a>
                <div class="caption">
                    <h3>Software Repairs</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                 <a href="custom_builds.php" class="thumbnail" >
                     <img src="media/customer_build/custom_build.png" alt="Customer Built Computers">
                </a>
                <div class="caption">
                    <h3>Custom Built Computers</h3>
                </div>
            </div>
        </div>
    </div>


</div>    
<!--Footer  -->

<?php include 'modules/footer.php'; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>







</html>