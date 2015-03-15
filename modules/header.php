<?php SESSION_start(); ?>
<head>
        <title>Tech Repair Genius - PC and Mac Repair specialist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tech Repair Genius, Rexburg. Idaho. I offer Custom Computers, Tech support, Virus Removal, and Hardware Repair.">
        <meta name="author" content="Techrepairgenius.com">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>
        <div id="main_container" class="container">

            <div id="title_well" class="well"> 

                <a href="index.php?action=home">
                    <img id="logo" src="media/logo.png" alt="TechRepairGenius.com">
                </a>

                <h1 id="heading">Tech Repair Genius</h1>
                <p>-Free Estimates, Fast Service.</p>
            </div>





            <!--Header with Navbar  -->	


            <div class="navbar navbar-inverse navbar-static-top" role="navigation" id="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand" id="nav_title"><img alt="Brand" src="media/logo.png"></a>
                        <button type="button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target= ".navbar-collapse">
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                        </button>
                    </div>
                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <!--for mobile navbar display-->
                        <ul class = "nav navbar-nav navbar-left">

                            <?php
                     
                     $pages = array(
                        '<a href="index.php?action=home">Home</a>',
                        '<a href="index.php?action=repairs">Repairs</a>',
                        '<a href="index.php?action=custom_builds">Custom Builds</a>',
                        '<a href="index.php?action=for_sale">For Sale</a>',
                        '<a href="index.php?action=contact">Contact</a>'  
                     );
     
                        foreach($pages as $page=>$content){
                    $li_str = '<li>';
                    if($page == $active_page){
                        $li_str = '<li class="active">';
                    }
                    $li_str .= $content.'</li>';
                    echo $li_str;
                }
                ?>
                        </ul>
                    </div>
                </div>
            </div>