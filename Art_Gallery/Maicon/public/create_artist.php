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
    <div></div>
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
                    <h1 style='text-align:center;margin:50px 0 0;color:#343A40;'>Create Artist</h1>
                    <p style='text-align:center;margin:0 0 50px; color:#999;'>Regist an new artist</p>
                    <hr>
                <form action="../App/Controller/Artist/Create.Controller.php" method="post" class="bootstrap-form-with-validation">
                    <div class="form-group"><label for="text-input">Name</label><input class="form-control" type="text" name="first-name"></div>
                    <div class="form-group"><label for="password-input">Surname</label><input class="form-control" type="text" name="last-name"></div>
                    <div class="form-group"><label for="email-input">Website&nbsp;</label><input class="form-control" type="text" name="website"></div>
                    <div class="form-group"><label for="password-input">Country</label><input class="form-control" type="text" name="country"></div>
                    <div class="form-group"><label for="text-input">City</label><input class="form-control" type="text" name="city"></div>
                    <div class="form-group"><label for="password-input">Street</label><input class="form-control" type="text" name="street"></div>
                    <div class="form-group">
                        <button class="btn btn-primary form-btn" type="submit">SAVE </button></div>
                </form>
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