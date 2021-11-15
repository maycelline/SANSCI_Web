<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Sansci | Meeting Room, Working Space, and Cafe</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/newStyle.css">
  </head>

  <body style="background-color: #FEF5ED">

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <?php include('headerAdmin.php')?>

  <div id="pricing" class="pricing-tables">
    <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row" style="margin-top:30px">
        <div class="col-lg-6 buttonAdmin"><a href="showCheckOutReserved.php">
          <div class="item second-item" style="margin: 10px; padding:30px; border: black solid">
          <br>
          <img src="assets/images/feature.png" style="width:50%; margin-bottom:30px" alt="">
          <br>
            <h5>Checkout Reserve</h5>
            <br>
          </div>
        </a></div>
        <!-- <div class="col-lg-4 buttonAdmin"><a href="#">
          <div class="item third-item" style="margin: 10px; padding:30px; border: black solid">
          <br>
          <img src="assets/images/refresh.png" style="width:80%; margin-bottom:30px" alt="">
          <br>
            <h5>Update Room n Table</h5>
            <br>
          </div>
        </a></div> -->
        <div class="col-lg-6 buttonAdmin"><a href="#">
          <div class="item first-item" style="margin: 10px; padding:30px; border: black solid">
          <br>
          <img src="assets/images/piggy-bank.png" style="width:50%; margin-bottom:30px" alt="">
            <br>
            <h5>See Income</h5>
            <br>
          </div>
        </a></div>
      </div>
    </div>
  </div>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 display-block">
          <div class="about footer-item">
            <div class="new-container">
              <p>Deboras Team - <a href="#mail"">deboras@mail.com</a></p>
              <div class="media fel"><a href="https://www.instagram.com/feli.g_25/" target="_blank" title="Feliciana Gunadi"></a></div>
              <div class="media sil"><a href="https://www.instagram.com/silviprisillia4/" target="_blank" title="Silvi Prisillia Louismono"></a></div>
              <div class="media yen"><a href="https://www.instagram.com/yen_aj29/" target="_blank" title="Yendistia Angelia Julianti"></a></div>
              <div class="media jes"><a href="https://www.instagram.com/jesslynowen/" target="_blank" title="Jesslyn Nadya Owen"></a></div>
              <div class="media may"><a href="https://www.instagram.com/mariamaycelline/" target="_blank" title="Maycelline Selvyanti Sudarsono"></a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="subscribe-newsletters footer-item">
            <ul class="misc-class">
              <h4>Miscellaneous Things Related to the Deboras</h4>
              <li class="misc"><a href="https://www.ithb.ac.id/study-program/Teknik/Informatika-2">Informatics ITHB</a></li>
              <li class="misc"><a href="https://linktr.ee/SansCo">Sans.Co</a></li>
              <li class="misc"><a href="https://www.instagram.com/ayamgeprekbebass/">Ayam Geprek Bebas</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>Copyright &copy; 2021 the Deboras x Squidward
            <br>
            Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <style>
    .buttonAdmin a {
        display: inline-block;
        font-size: 15px;
        font-weight: 400;
        text-transform: capitalize;
        border-radius: 23px;
        transition: all .3s;
    }
    .buttonAdmin a:hover {
        background-color: black;
        color: #fff;
        border-radius: 20px;
    }
    .pricing-tables .item h5 {
      margin-top:20px;
      font-size: 25px;
      font-weight: 700;
      color: #2a2a2a;
    }
  </style>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/newScript.js"></script> <!-- additional -->

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();
      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>