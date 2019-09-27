<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>EXFX</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/jquery.cookieBar.min.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
    <link rel="icon" href="fav.png" type="image/x-icon">

</head>

<body id="top">

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header 
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php">
                <img src="images2/exfx_logo.png" class="logoImg" id="" style="height:100%;" alt="Homepage">
            </a>
        </div>

        <nav class="row header-nav-wrap wide">
            <ul class="header-main-nav " style="">               
            </ul>

            <ul class="header-social">
                    <li><a href="EXFXforBrands.php" class="logId" title="blog"  style="color: white; font: Regular 32px/38px Roboto !important; font-weight: normal !important; ">EXFX for BRANDS</a></li>	
                     
                     <a href="#downloadApp" class="smoothscroll btn btn--small itemButton btn--pill gradient">
                           DOWNLOAD APP
                        </a>
                <!-- <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li> -->
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>
    
    </header> <!-- end header -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    
    $(document).ready(function(){
    var pageURL = $(location).attr("href");
    var header = false;
    if(pageURL == 'http://encyclodigital.com/projects/exfx/index.php' || pageURL=='http://encyclodigital.com/projects/exfx/EXFXforBrands.php' || pageURL== 'http://encyclodigital.com/projects/exfx/aboutus.php'){
        header = true;
    }
     var logo = $('.logoImg');
     var hdr= $('.s-header');
     var log =  $('.logId');

if(header == false){
     hdr.addClass('sticky');
     log.addClass('blackColor');
     logo.addClass('logo2');
     logo.attr("src", "images2/logo_name_black.png");
}
    });
</script>
 <script>
                                $("#getLink").click(function(){
                                    $("#downloadNotice").html("Thank you, we've sent you the details in the SMS.")
                                })
                            </script>

