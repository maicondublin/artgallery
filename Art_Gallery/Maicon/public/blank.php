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
                <div class="logo"><a class="simple-text" href="#">Admin dashboard</a></div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="AveG-admin.php">Go to Ave Gallery</a></li>
                    <li class="list-group-item"><span></span><a href="dash-artpiece.php">Art-Pieces</a></li>
                    <li class="list-group-item"><a href="dash-artist.php">Artists</a></li>
                    <li class="list-group-item"><a href="dash-library.php">Library</a></li>
                    <li class="list-group-item"><a href="dash-library.php">Profile</a></li>
                    <li class="list-group-item"><a href="home.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid">
                    <div><a class="navbar-brand" href="#">Control panel/Art-Pieces</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav"></ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Caesar-Account </a></li>
                        </ul>
                </div>
        </div>
        </nav>
        <div class="content">
            <p>Search for Painter's name or his Art Pieces under.</p>
            <div class="search-container"><input type="text" class="search-input" name="search-bar" placeholder="Search..."><button class="btn btn-light search-btn" type="button"> <i class="fa fa-search"></i></button></div>
            <p>Upoload Art Pieces, below.</p>
            <div class="dashed_upload"><div class="wrapper">
  <div class="drop">
    <div class="cont">
      <i class="fa fa-cloud-upload"></i>
      <div class="tit">
        Drag & Drop
      </div>
      <div class="desc">
        or 
      </div>
      <div class="browse">
        click here to browse
      </div>
    </div>
    <output id="list"></output><input id="files" multiple name="files[]" type="file" />
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script></div>
            <section></section>
        </div>
    </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro"></div>
        </div>
    </div>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="photo-gallery"></div>
    <div class="testimonials-clean"></div>
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