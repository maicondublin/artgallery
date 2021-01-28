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
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ave</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/Article-Cards.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Background-Image---Parallax---No-Text.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Card-Group1-Shadow.css">
    <link rel="stylesheet" href="assets/css/Custom-Upload-File.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11-1.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11-2.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="assets/css/Login-Form-blue-Gradient-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-blue-Gradient.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Superponer-Imgenes-1.css">
    <link rel="stylesheet" href="assets/css/Superponer-Imgenes.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/THANOS_fullscreen_image_with_text-1.css">
    <link rel="stylesheet" href="assets/css/THANOS_fullscreen_image_with_text.css">
    <link rel="stylesheet" href="assets/css/Video-Parallax-Background.css">
</head>

<body>
    <div></div>
    <div id="bdiv">
        <div class="row register-form">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
                    <div class="container"><a class="navbar-brand" href="home.php">Ave Art Gallery</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div
                            class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav mr-auto">
                                
                            </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
            </div>
            </nav>
        </div>
    </div>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="../App/Controller/User/Signup.Controller.php" method="post">
                <h1>Register Form</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">First Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="first-name"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Surname </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="last-name"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Userame </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="username"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="confirm-password"></div>
                </div>
                <div class="form-check">
                    <input class="btn btn-light submit-button" type="submit" value="Submit Form">
                </form>
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

    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Video-Parallax-Background.js"></script>
</body>

</html>