<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <!-- <a href="index.html" class="logo">
              <img src="assets/images/logo.png">
            </a> -->
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#portfolio">See Facilities</a></li>
              <li class="scroll-to-section"><a href="#pricing">Pricing</a></li> 
              <li class="scroll-to-section"><a href="#contact">Reservation</a></li> 
              <?php
                if(!$_SESSION){
                    echo '<li class="scroll-to-section"><div class="main-red-button-hover"><a href="#contact">LOGIN</a></div></li>';
                } else {
                    echo '<li class="scroll-to-section"><div class="main-red-button-hover"><a href="logout.php">LOGOUT</a></div></li>';
                }
              ?>
            </ul>        

            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->