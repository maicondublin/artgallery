<?php

/*********************************************************************************
*    The following code was developed for studies purpose. The Art
*    Gallery Framework is free to copy, edit, and use without any
*    restrictions. This project is a collaboration of people interested in
*    learning and sharing experiences. We are also happy to be able to
*    collaborate with the developers' community.
*    All credit to all collaborators who dedicated, and worked hard in this 
*    project.
*    
*    We've posted a little bit about our experience in this project on our 
*    website. It's available at: 
*    https://remoter-calibration.000webhostapp.com/art_gallery_framework
*    /art_gallery.html
*
*    Any other reference of code from internet is along the codes and files
*
*    FRAMEWORK AVAiLABILITY: https://github.com/renan-fuzita/gallery-framework
*    
*    Title: Art Gallery Framework
*
*    Author: Renan Fuzita, Raul Fuzita, Marcelo Pugliesi, Luiz Dias 
*    Washington Bertolino, Priscila Juliano, Diego Gutierres, 
*    Luiz, Maicon Almeida.
*
*    Date: 14/12/2019
*    Code version: 8.0.1
*    Availability: https://github.com/renan-fuzita/gallery-framework
*********************************************************************************/
    include_once('./includes/session.php');
    include('./includes/header.php');
?>
<body>
    
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="" style="background-image:url(&quot;assets/img/7efb12f619792cfa59c13587969d8206.jpg&quot;);">
            <div class="sidebar-wrapper">
                <div class="logo">   

                <!-- navigation -->
               <?php include('./includes/navigation.php');?>

            </div>
        </div>
         <div class="main-panel">
            <div class="content">
            <h1 style='text-align:center;margin:50px 0 0;color:#343A40;'>Dashboard</h1>
               <p style='text-align:center;margin:0 0 50px; color:#999;'>Welcome to the arts world</p>
                <hr>


                <div data-bs-parallax-bg="true" style="height: 500px;background-image: url(assets/img/87c35f90d51cb0c5bdcc82ab7cf20509.jpg);background-position: center;background-size: cover;"></div>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Latest Articles</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/0000028_artistasdesigners-candidoportinari.jpeg"></a>
                    <h3 class="name">Candido Portinari</h3>
                    <p class="description">He is considered one of the most important Brazilian painters as well as a prominent and influential practitioner of the neo-realism style in painting.</p><a class="action" href="http://www.portinari.org.br/" target="_blank"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/frida-photo.jpg"></a>
                    <h3 class="name">Frida Kahlo</h3>
                    <p class="description">&nbsp;Inspired by the country's popular culture, she employed a naïve folk art style to explore questions of identity, postcolonialism, gender, class, and race in Mexican society.</p><a class="action" href="https://www.frida-kahlo-foundation.org/"
                        target="_blank"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/20151105182332-picasso-art-artist-pablo.jpeg"></a>
                <h3 class="name">Pablo Picasso</h3>
                <p class="description"><br>&nbsp;Painter,&nbsp; sculptor,&nbsp; printmaker,&nbsp; ceramicist,&nbsp; stage designer, poet and playwright . Regarded as one of the most influential artists of the 20th century, he is known for co-founding the&nbsp;Cubist movement,
                    the invention of&nbsp; constructed sculpture,&nbsp;he co-invention of collage,&nbsp;and for the wide variety of styles that he helped develop and explore.<br><br><br></p><a class="action" href="https://www.pablopicasso.org/" target="_blank"><i class="fa fa-arrow-circle-right"></i></a></div>
        </div>
    </div>
    </div>







            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Dashboard-layout-v11.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery.js"></script>
    <script src="assets/js/Custom-Upload-File.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Video-Parallax-Background.js"></script>
</body>

</html>