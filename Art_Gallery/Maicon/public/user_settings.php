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
    use App\View\User\UserSettings;

    include_once('./includes/session.php');
    require('../App/Controller/User/LoadSettings.Controller.php');
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
                    <h1 style='text-align:center;margin:50px 0 0;color:#343A40;'>Settings</h1>
                    <p style='text-align:center;margin:0 0 50px; color:#999;'>Update your profile</p>
                    <hr>
                <form class="bootstrap-form-with-validation" action="../App/Controller/User/Update.Controller.php" method="post">

                    <?php
                        $user = new UserSettings();
                        if (!$user->showYourself($account)) {
                            echo "<div>Sorry, data unavailable!</div>";
                        }
                    ?>
                    
                    <div class="form-group">
                        <input class="btn btn-primary form-btn" type="submit" value="SAVE">
                    </div>

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