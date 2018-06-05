

    
    <!DOCTYPE html>
<html lang="en">
    <head>
        <title>UVM IEEE</title>
        <meta name="author" content="Maxfield Valentine Davis, Emily Smith, Neal Zhu">

        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <script type="text/javascript" src="js/prefixfree.min.js"></script>
        <link rel='stylesheet' href='css/stylesheet.css' type='text/css' media='screen'>
        <link rel="icon" type="img/png" href="img/icon.png" property="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/accordion-slider.min.css" media="screen"/>

        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.accordionSlider.min.js"></script>
        <meta name="description" content="The Institute of Electrical and Electronics Engineers at the
              University of Vermont is a club that aspire to create a technological innovate community.
			  we provides support for students outside the classroom.">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <!--########################slide pictures##################################-->
        <style>
            .slides {display:none}
            .leftArrow, .rightArrow, .badge {cursor:pointer}
            .badge {height:13px;width:13px;padding:0}
        </style>
        <!--######################## end slide pictures ##################################-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#my-accordion').accordionSlider({
                    width: 1200,
                    height: 400,
                    responsiveMode: 'custom',
                    startPanel: 1,
                    closePanelsOnMouseOut: false,
                    shadow: false,
                    panelDistance: 10,
                    autoplay: true,
                    mouseWheel: true,
                    breakpoints: {
//				960: {visiblePanels: 3},
                        800: {visiblePanels: 3, orientation: 'vertical', aspectRatio: 1.7, height: 600}

                    }
                });
            });

        </script>
    </head>
    <?php
    $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
    $path_parts = pathinfo($phpSelf);
    // giving each body tag an id really helps with css later on
    print '<body id="' . $path_parts['filename'] . '">';
    ?>