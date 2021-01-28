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
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="home.php">Ave Art Gallery</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="home.php" target="_blank">Home</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="dash-artist.php">Dashboard</a><a class="btn btn-light action-button" role="button" href="home.php">Log out</a></span></div>
        </div>
    </nav>
    <div data-bs-parallax-bg="true" style="height: 500px;background-image: url(assets/img/bb8ab2f3e380833b4cb0a092646711af.jpg);background-position: center;background-size: cover;"></div>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Art Pieces.</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/starry_night_full.jpg"><img class="img-fluid" src="assets/img/starry_night_full.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/roots.jpg"><img class="img-fluid" src="assets/img/roots.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/avignon.jpg"><img class="img-fluid" src="assets/img/avignon.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/sunflower_full.jpg"><img class="img-fluid" src="assets/img/sunflower_full.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/pablo.jpg"><img class="img-fluid" src="assets/img/pablo.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/2581.jpg"><img class="img-fluid" src="assets/img/2581.jpg"></a></div>
            </div>
        </div>
    </div>
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
    
    
    <figure class="snip1253">
  <div class="image"><img src="assets/img/9d3353bff9537706e22623c9bb628fb0.jpg" alt="sample52"/></div>
  <figcaption>
    <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
    <h3>Exhibition of new Artists</h3>
    <p>The EXPERT in anything was ONCE a BEGINNER.
      
    </p>
  </figcaption>
  
</figure>
<figure class="snip1253 hover">
  <div class="image"><img src="assets/img/Dali-Portrait-de-Paul-Eluard.jpg" alt="sample66"/></div>
  <figcaption>
    <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
    <h3>Salvador Dali</h3>
    <p>
      Dalí was a skilled draftsman, best known for the striking and bizarre images in his work. His painterly skills are often attributed to the influence of Renaissance.
    </p>
  </figcaption>
  <footer>
    <div class="views"><i class="ion-eye"></i>1,870</div>
    <div class="love"><i class="ion-heart"></i>973</div>
    <div class="comments"><i class="ion-chatboxes"></i>85</div>
  </footer><a href="https://www.salvador-dali.org/en/"></a>
</figure>
<figure class="snip1253">
  <div class="image"><img src="assets/img/f_0753.jpg" alt="sample59"/></div>
  <figcaption>
    <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
    <h3>Vincent Van Gogh</h3>
    <p>
      Post-impressionist painter who is among the most famous and influential figures in the history of Western art. In just over a decade he created about 2,100 artworks, including around 860 oil paintings, most of which date from the last two years of his life.
    </p>
  </figcaption>
  <footer>
    <div class="views"><i class="ion-eye"></i>928</div>
    <div class="love"><i class="ion-heart"></i>198</div>
    <div class="comments"><i class="ion-chatboxes"></i>23</div>
  </footer><a href="https://www.vangoghmuseum.nl/en?v=1"></a>
</figure>
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