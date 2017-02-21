  <?php 

    $thisPage = "Welcome";

    require 'Includes/header.php';

  ?>

    <div class="jumbotron">
      <div class="container">
        <h1 id="override">Find your best friend... </h1>
      </div>
    </div>

    <!-- Main Body -->

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="images/icon-grooming.png" class="hidden-xs hidden-sm img-responsive center-block " height="250" width="250" alt="responsive image">
          <h2>Grooming</h2>
          <p>Grooming is our speciality! We know how difficult it can be to find a great groomer at a reasonable price. That is why we take pride in our pet grooming services.</p>
          <p><a class="btn btn-default" href="grooming.php" role="button">Schedule today &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="images/icon-aboutus.png" class="hidden-xs hidden-sm img-responsive center-block " height="250" width="250" alt="responsive image">
          <h2>About Us</h2>
          <p>We love pets! We own pets (and lots of them)! Every member on our staff is dedicated to giving the best customer service for you and your four-legged, friend. It's who we are through and through. Your pets will love us.</p>
          <p><a class="btn btn-default" href="aboutus.php" role="button">Who we are &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <img src="images/icon-storelocation.png" class="hidden-xs hidden-sm img-responsive center-block " height="250" width="250" alt="responsive image">
          <h2>Store Location</h2>
          <p>We are local in the heart of Grimes, Iowa! Just a country mile north west of the greater Des Moines area. Come visit us today for all your pet supplies and grooming needs.</p>
          <p><a class="btn btn-default" href="location.php" role="button">Find us &raquo;</a></p>
        </div>
      </div>
    </div>

  <!-- Carousel for available pets -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/carousel/pet1.png" alt="Pet Photo">
        <div class="carousel-caption">
          <h1>Meet Champ!</h1>
          <p>An excellent 2 year old mixed breed that is ready for any family!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel/pet2.png" alt="Pet Photo">
        <div class="carousel-caption">
          <h1>Bunnies!! Lot's of bunnies.</h1>
          <p>Hurry in because these cute, fluff balls will find a home quick!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel/pet3.png" alt="Pet Photo">
        <div class="carousel-caption">
          <h1>Raleigh</h1>
          <p>The strangest Russian Blue cat but also the best. He will make a great buddy for any man.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel/pet4.png" alt="Pet Photo">
        <div class="carousel-caption">
          <h1>Spartacus</h1>
          <p>Loyal, friendly and mellow. Spartacus would be a dog for a quite home.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel/pet5.png" alt="Pet Photo">
        <div class="carousel-caption">
          <h1>Just in... Dwarf Hampsters!</h1>
          <p>Great pet for just about anyone young or not-so-young!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/carousel/pet6.png" alt="Pet Photo">
        <div class="carousel-caption">
          <h1>"Hi! I'm, Peppa!"</h1>
          <p>Fun loving, little Peppa is waiting to love you. The best lap kitty.</p>
        </div>
      </div>            
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <?php require 'Includes/footer.php'; ?>

