<!DOCTYPE html>
<html>
<title>Dar Running Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>



<body>

<!-- Navbar (sit on top) -->
<div class="" id="menu">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="text-muted w3-bar-item w3-button"><b>Logo</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="links w3-hide-small">
      <a class="w3-bar-item w3-button"></a>
      <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Home</a>
      <a href="{{ url('/about') }}" class="w3-bar-item w3-button">About Us</a>
      <a href="{{ url('/events') }}" class="w3-bar-item w3-button">Race & Events</a>
      <a href="#contact" class="w3-bar-item text-danger w3-button">Clubs</a>
      <a href="#contact" class="w3-bar-item w3-button">Join</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact Us</a>
    </div>
  </div>
</div>

<!-- Header -->
<!--<header class="w3-display-container w3-content w3-wide" style="max-width:100%;" id="home">
  <img class="w3-image" src="https://i2-prod.dublinlive.ie/news/dublin-news/article12695699.ece/ALTERNATES/s615/CFI6.jpg" alt="Architecture" width="100%" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white">Dar<span class="w3-padding w3-black w3-opacity-min"><b>Runnnig</b></span>Clubs<span class="w3-hide-small w3-text-light-grey"></span></h1>
  </div>
</header>-->




<section class="main-slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div id="marathon_list" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-md-offset-2" style="opacity: 1;">
        <?php
          echo"<table class='table table-responsive table-dark table-hover text-center'>";
          echo"<tr><th class='text-center'> Our Race Calender </th></tr>";
          for ($i=0; $i < 4; $i++) { 
             echo("<tr><td> <a href=''> Marathon".$i."</a></td></tr>");
           } 
           echo "</table>";
        ?>
      </div>
    </div>


    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <!-- Carousel items -->
    <div class="carousel-inner">

      <!-- Slide 1 : Active -->
      <div class="item active">
        <img src="{{ URL::asset('img/darRunning4.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h4>Our shoes have more miles than your car.</h4>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide1 -->

      <!-- Slide 2 -->
      <div class="item ">
        <img src="{{ URL::asset('img/darRunning2.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h4>We don’t run to add years to our lives. We run to add life to our years 7 days without running makes one weak.</h4>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide2 -->

      <!-- Slide 3 -->
      <div class="item ">
        <img src="{{ URL::asset('img/darRunning3.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h4>Our sport is other sports’ punishment.</h4>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide3 -->

      <!-- Slide 4 -->
      <div class="item ">
        <img src="{{ URL::asset('img/darRunning1.png') }}" alt="">
        <div class="carousel-caption xs_hide">
          <h1>Dar Runners Club</h1>
          <h4>Running won’t kill you, you’ll pass out first.</h4>
        </div><!-- /.carousel-caption -->
      </div><!-- /Slide4 -->

    </div><!-- /.carousel-inner -->


    <!-- Controls -->
    <div class="control-box">
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.control-box -->


  </div><!-- /#myCarousel -->
</section><!-- /.main-slider -->


<!--
   #
   # Our Profile (about us)
   #
  -->
<div class="row">
  <div class="col-md-6">
    <div class="col-md-8 col-md-offset-2 text-center" style="height:;">
      <br>
      <br>
      <h3>Achievements</h3><hr>
      <br>
      <div class="container-fluid text-center">
      <span class="avg_font_size">
        Running is an exercise that improves a persons mental and physical state. Jogging is considered one of the most popular forms of weight loss.
      </span><br><br><br>
      <div class="col-md-4 text-center">
        <span class="bg-nos">5</span>
        <p>YEARS OF<br>EXPERIENCE</p>

      </div>
      <div class="col-md-4 text-center">
        <span class="bg-nos">7</span>
        <p>ANNUAL<br>MARATHONS</p>
      </div>
      <div class="col-md-4 text-center">
        <span class="bg-nos">21</span>
        <p>WON<br>MEDALS</p>
      </div>
    </div><br><br>
    </div>
    
  </div>

  <!-- End of About us-->

  <!--
   #
   # Club & Runs
   #
  -->


  <div class="col-md-6 bg-dark" style="height: 80vh">
     <div class="col-md-6 col-md-offset-3 text-light text-center">
      <br>
      <br>
      <h3>Runs & Clubs</h3>
      <br>
    </div>

      <div class="col-md-12 col-xs-12">
      <div class="tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#a" data-toggle="tab"><span>Dar Running club</span></a></li>
          <li><a href="#b" data-toggle="tab"><span>Dasani</span></a></li>
          <li><a href="#c" data-toggle="tab"><span class=""></span></a></li>
          <li><a href="#d" data-toggle="tab"><span class=""></span></a></li>
          <li><a href="#e" data-toggle="tab"><span class=" "></span></a></li>
          <li><a href="#f" data-toggle="tab"><span class=""></span></a></li>
        </ul>

        <div class="tab-content">
          <div class="col-md-8 border-left tab-pane active" id="a">
              <table class="table text-light table-borderless">
                <tr>
                  <td class="text-right">Area : </td><td class="text-info text-center">Posta</td>
                </tr>
                <tr>
                  <td class="text-right">Members : </td><td class="text-info text-center">86</td>
                </tr>
                <tr>
                  <td class="text-right">Schedules : </td><td class="time text-info text-center"> Monday 15hrs <br> Tuesday 16hrs <br>
                                Wednesday 16hrs <br> Thursday 16hrs <br>
                                Friday 16hrs <br> Saturay 17hrs </td>
                </tr>
              </table>
          </div>
          <div class="border-left col-md-8 tab-pane" id="b">
            <table class="table text-light table-borderless">
                <tr>
                  <td class="text-right">Area : </td><td class="text-info text-center">Mlimani</td>
                </tr>
                <tr>
                  <td class="text-right">Members : </td><td class="text-info text-center">62</td>
                </tr>
                <tr>
                  <td class="text-right">Schedules : </td><td class="time text-info text-center"> Monday 16hrs <br> Tuesday 17hrs <br>
                                Wednesday 17hrs <br> Thursday 17hrs <br>
                                Friday 17hrs <br> Saturay 17hrs </td>
                </tr>
              </table>
          </div>
          <div class="tab-pane" id="c">
            
          </div>
          <div class="tab-pane" id="d">
            
          </div>
          <div class="tab-pane" id="e">
            
          </div>
          <div class="tab-pane" id="f">
            
          </div>
        </div><!-- /tab-content -->
      </div><!-- /tabbable -->

        </div>
      </div>
      <!-- End of Clubs & Runs -->

  </div>
</div>


<!--
   #
   # History of the Club
   #
  -->

<div id="club_history" class=" text-light container-fluid bg-dark_grey">
  <div class="col-md-4 col-md-offset-4 text-center"><br>
    <h3>History of Our Club</h3>

    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-5 col-xs-offset-5 col-sm-offset-5"><hr></div><br>
    </div>

  </div>

  <div class="col-md-12 history_text">
    <div class="col-md-6">
      <br>
     <h4>Where we came from</h4>
     <span class="text-secondary">
        Lorem ipsum dolor sit amet, prima lucilius sensibus ex sit. Mundi antiopam no mel, at mel illud nominavi consectetuer, illum assentior cum at. Eruditi intellegebat in vix, est partem posidonium ea. Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at.

        Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt. Et justo ullum patrioque per.

        No sit elitr dolorem, integre aliquam conclusionemque mel ei. Qui et modo periculis voluptatum, vis admodum accumsan scaevola cu. Velit sonet necessitatibus id nec, ea dico labitur vim, cu dico fierent usu. Meis iusto aliquam ex his, ne sea lorem pertinax, populo debitis ne vel.

      </span>
    </div>
     <div class="col-md-6">
      <br>
         <h4>Milestones</h4>
         <span class="text-secondary">
            Lorem ipsum dolor sit amet, prima lucilius sensibus ex sit. Mundi antiopam no mel, at mel illud nominavi consectetuer, illum assentior cum at. Eruditi intellegebat in vix, est partem posidonium ea. Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at.

            Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt. Et justo ullum patrioque per.

            No sit elitr dolorem, integre aliquam conclusionemque mel ei. Qui et modo periculis voluptatum, vis admodum accumsan scaevola cu. Velit sonet necessitatibus id nec, ea dico labitur vim, cu dico fierent usu. Meis iusto aliquam ex his, ne sea lorem pertinax, populo debitis ne vel.

          </span>
          <br><br><br>
    </div>
  </div>
</div>

<!-- End of History -->


<!--
   #
   # Gallery
   #
  -->


<div class=" text-light row bg-dark">
  <div class="col-md-4 col-md-offset-4 text-center">
    <h3>Our Gallery</h3>
    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-5 col-xs-offset-5 col-sm-offset-5"><hr></div><br>
    </div>
  </div>
  <div id="gallery" class="col-md-12" style="margin-bottom: ">
    <div class="clearfix visible-sm"></div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners1.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners2.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners3.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners4.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners5.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners6.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners7.png') }}" alt=""></center><br>
    </div>
     <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners8.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners9.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners10.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners11.png') }}" alt=""></center><br>
    </div>
    <div class="runners col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <center><img class="img-responsive" src="{{ URL::asset('img/runners12.png') }}" alt=""></center><br>
    </div>
  </div>
</div>


<!-- Team info -->

<div class="container-fluid">
  <div class="col-md-6 col-md-offset-3 text-center">
    <br>
    <h3>Dar Runners Club</h3>
    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-5 col-xs-offset-5 col-sm-offset-5"><hr></div><br>
    </div>
  </div>

  <div class="col-md-6 pull-right">
    <br>
    <br>
    <br>
    <center><img class="img-responsive" src="{{ URL::asset('img/runners.jpg') }}" alt=""></center>
    <br>
    <br>
    <br>
  </div>
  <div class="col-md-6 pull-right text-center">
    <br>
    <br>
    <br>
    <p class="history_text">
      <b>Eruditi intellegebat in vix, est partem posidonium ea.</b><br><br> Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt. Et justo ullum patrioque per. No sit elitr dolorem, integre aliquam conclusionemque mel ei. Qui et modo periculis voluptatum, vis admodum accumsan scaevola cu.
    </p>
    <div class="text-center">
      <br>
      <br>
      <button class="btn btn-primary">Read more</button>
    </div>
  </div>


  <div class="col-md-12 text-light" style="background-color: #333333">
    <div class="col-md-3">
      <br>
      <img class="img-responsive" src="{{ URL::asset('img/coach.jpg') }}" alt="">
      <h4>Lily Lemon</h4>
      <span class="text-secondary"><i>Coach</i></span>
      <br>
      <br>
      <span>
        Et justo ullum patrioque per. No sit elitr dolorem, integre aliquam conclusionemque mel ei.
      </span>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <br>
      <img class="img-responsive" src="{{ URL::asset('img/coach.jpg') }}" alt="">
      <h4>Lily Lemon</h4>
      <span class="text-secondary"><i>Coach</i></span>
      <br>
      <br>
      <span>
        Et justo ullum patrioque per. No sit elitr dolorem, integre aliquam conclusionemque mel ei.
      </span>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <br>
      <img class="img-responsive" src="{{ URL::asset('img/coach.jpg') }}" alt="">
      <h4>Lily Lemon</h4>
      <span class="text-secondary"><i>Coach</i></span>
      <br>
      <br>
      <span>
        Et justo ullum patrioque per. No sit elitr dolorem, integre aliquam conclusionemque mel ei.
      </span>
      <br>
      <br>
    </div>

  </div>

  <div class="col-md-12">
    <br>
   <div class="col-md-4 col-md-offset-4 text-center">
    <h2>Testimonies</h2>
    <div class="col-md-12">
      <div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-5 col-xs-offset-5 col-sm-offset-5"><hr></div><br>
    </div>
  </div>

  <div class="col-md-12" style="margin-bottom: 10px">
    <div class="col-md-4">
      <img class="pull-right img-responsive rounded-circle" src="{{ URL::asset('img/coachsm.png') }}" alt="">
    </div>

    <br>
    <div class="col-md-6" style="background-color: #333333; padding: 15px">
      <span class="text-light" style="font-size: 17px;">
        Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt.
        <br>
      </span>
    </div>
  </div>
  <br>

   <div class="col-md-12" style="margin-bottom: 10px">
    <div class="col-md-4">
      <img class="pull-right img-responsive rounded-circle" src="{{ URL::asset('img/coachsm.png') }}" alt="">
    </div>

    <br>
    <div class="col-md-6" style="background-color: #333333; padding: 15px">
      <span class="text-light" style="font-size: 17px;">
        Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt.
        <br>
      </span>
    </div>
  </div>

   <div class="col-md-12">
    <div class="col-md-4">
      <img class="pull-right img-responsive rounded-circle" src="{{ URL::asset('img/coachsm.png') }}" alt="">
    </div>

    <br>
    <div class="col-md-6" style="background-color: #333333; padding: 15px">
      <span class="text-light" style="font-size: 17px;">
        Ius eu ancillae evertitur vulputate. Nonumy evertitur deseruisse has at. Pro impetus delectus postulant eu, nemore pertinacia et eam. An vim vitae everti, ex duo antiopam expetenda. Debitis fierent suscipiantur id sit, ei suas malorum eruditi qui. Iudicabit rationibus constituam eum ad, et quo postulant tincidunt.
        <br>
      </span>
    </div>
  </div>
  </div>
</div>


<!-- Footer -->
  <br>
  <br>
  <br>
<div class="container-fluid bg-dark">
  <br>
  <div class="col-md-6">
    <div class="col-md-6 pull-right">
    <h4 class="text-light text-center">Contact Information</h4><br>
      <p><i class="glyphicon glyphicon-map-marker text-light"> Makumbusho, Dar es Salaam, Tanzania</i></p><br>
      <p><i class="glyphicon glyphicon-phone-alt text-light"> 077777777777</i></p><br>
      <p><i class="glyphicon glyphicon-send text-light"> email@domain.com</i></p>
    </div>
  </div>

  <div class="col-md-6">
    <div class="col-md-6 text-center" style="font-size: 18px">
    <h4 class="text-light text-center">Useful Links</h4><br>
      <a href="">About Us</a><br>
      <a href="">Register</a><br>
      <a href="">Events</a><br>
    </div>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-16">
    &copy; Dar Running Club Website 2018
</footer>



<!--

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>John Doe</h3>
      <p class="w3-opacity">CEO & Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <h3>Jane Doe</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
 <!-- <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your and our next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>-->
  
<!-- End page content 
</div>

<!-- Google Map 
<div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>-->

<!-- Footer -->


<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<script type="text/javascript">
  // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });

</script>

</body>
</html>
