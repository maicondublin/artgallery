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
    include('./includes/home-header.php');
?>


    <section>
        <div class="lgp-hd">
            <h2><strong>welcome.</strong></h2>
            <h5><strong>log &nbsp;into Ave.</strong></h5>
        </div>
        <div class="container login-cont">
            <div class="row">
                <div class="col-10 col-sm-6 col-md-4 col-lg-4 offset-1 offset-sm-3 offset-md-4 offset-lg-4 login-col"><i class="icon ion-lock-combination"></i>
                    <form class="login-form" action="../App/Controller/User/Login.Controller.php" method="post">
                        <div class="form-group"><input class="form-control form-control-lg lg-frc" type="text" name="credential" placeholder="Enter User ID"></div>
                        <div class="form-group"><input class="form-control form-control-lg lg-frc" type="password" name="password" placeholder="Enter Password"></div>
                        <div class="form-group"><button class="btn btn-light btn-lg login-btn" type="submit"><strong>Login</strong></button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>



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

    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Video-Parallax-Background.js"></script>
</body>

</html>