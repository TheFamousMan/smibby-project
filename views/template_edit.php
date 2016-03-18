<?php


      $result = $mysqli->query("
      SELECT *
      FROM content
      ");


      while($content = $result->fetch_assoc()){

  echo    '<form action="?action=update" method="post">
          <!DOCTYPE html>
          <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Smibby | Your helping hand</title>

            <link rel="icon" type="image/png" href="img/smibby.png">
            <meta name="description" content="Bemikasoftware brings a new app on the market Smibby Smibby helps you with everyday tasks.">
            <meta name="keywords" content="Smibby,app,help,autism,alzheimer,forgetting,daily tasks,perform tasks,in order,helping hand,">
            <meta name="author" content="Smibby">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png">
            <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

            <link rel="stylesheet" href="style.css">
            <!-- FONTS -->
            <link href="https://fonts.googleapis.com/css?family=Signika:400,600,700,300" rel="stylesheet" type="text/css">

          </head>
          <body>
          <header>

            <div class="menu">
            
              <ul class="txt">
                <img src="img/logo.png" alt="Smibby logo" title="Smibby logo" class="logos"/>
                
                 
                  <li class="li-item">    
                    <a class="button button-primary" href="#register"><span style="color:white;" class="icon icon-right chevron-right">Register</span></a>
                  </li>
                  <li class="li-item">
                    <a class="button" style="color:white;" href="#login">Login</a>
                  </li> 
                  <li class="li-item menu-margin">
                    <a href="#reviews">Reviews</a>
                  </li>    
                <li class="li-item menu-margin">
                    <a href="#what">What</a>
                  </li>    
                <li class="li-item menu-margin">
                    <a href="#who">Who</a>
                  </li>
                  
              </ul>
            </div>
          </header>
          <div class="banner">
            <div class="container text-center">
              <h1 id="logo" class="logo"><img width="200px" src="img/logo.png" alt=""></h1>
              <h2 class="banner-heading" style="color:#5C0538;"><input type="text" name="h_text1" value="'.$content['h_text1'].'"></h2>
              <p class="p-big col-8-tablet col-6-desktop no-float center-element"><input style="width:400px" type="text" name="h_text2" value="'.$content['h_text2'].'">
              </p>
              <div class="banner-buttons">
                <a class="button" href="#download"><input style="color:black;" type="text" name="h_btn1" value="'.$content['h_btn1'].'"></a>
              </div>
            </div>
          </div>

          <div class="gallery-block content-block container row-5-desktop" id="who">
              <div class="clear">
                <div class="col-5-desktop">
                  <h1><input style="width:400px" type="text" name="who_text1" value="'.$content['who_text1'].'"></h1>
                  <p class="p-big">
                    <input style="width:400px" type="text" name="who_text2" value="'.$content['who_text2'].'">
                  </p>
                  <p>
                    <textarea style="width:400px;height:100px;" name="who_text3">'.$content['who_text3'].'</textarea>
                  </p>
                </div>
                <div class="col-6-desktop right-desktop row-2 row-0-tablet">
                  <div class="carousel slide" id="carousel-gallery">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-gallery" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-gallery" data-slide-to="1"></li>
                      <li data-target="#carousel-gallery" data-slide-to="2"></li>
                      <li data-target="#carousel-gallery" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="img/conference-image-1.jpg" alt="Conference">
                      </div>
                      <div class="item">
                        <img src="img/conference-image-2.jpg" alt="Conference">
                      </div>
                      <div class="item">
                        <img src="img/conference-image-3.jpg" alt="Conference">
                      </div>
                      <div class="item">
                        <img src="img/conference-image-4.jpg" alt="Conference">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="hr">

          <div class="content" id="what">
            <div class="introduction-block row-6 container">
              <div class="clear">
                <div class="col-6-desktop">
                  <div class="col-11 no-float no-padding">
                    <h1><input style="width:400px" type="text" name="what_text1" value="'.$content['what_text1'].'"></h1>
                    <p class="p-big">
                      <input style="width:400px" type="text" name="what_text2" value="'.$content['what_text2'].'">
                    </p>
                    <p>
                      <textarea style="width:400px;height:100px;" name="what_text3">'.$content['what_text3'].'</textarea> 
                    </p>
                  </div>
                </div>
                <div class="col-6-desktop">
                  <div class="tabs tabs-primary">
                    <ul class="tabs-list clear">
                      <li class="col-6-tablet block text-center no-padding tab active"><a href="#learning-objective" data-toggle="tab">Voor hulpbehoevende</a></li>
                      <li class="col-6-tablet block text-center no-padding tab"><a href="#target-audience" data-toggle="tab">voor artsen</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="learning-objective">
                        <p>
                          Here are some points that may be in your favor with the use of this app.
                        </p>
                        <div class="clear">
                          <div class="col-7-tablet">
                            <ul>
                              <li>Always have your tasks in your hand.</li>
                              <li>Perform your tasks step-by-step.</li>
                              <li>Always help with the app <strong>Smibby</strong>.</li>
                              <li>Enter and modify tasks is always possible.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="target-audience">
                        <p>
                          Here are some points that may come in hands for doctors or supervisors.   
                        </p>
                            <div class="clear">
                          <div class="col-7-tablet">
                            <ul>
                              <li>The tasks can be added or created by the supervisors of the incapacitated person. </li>
                              <li>They can also ensure whether they have completed these tasks and whether they need help or not.</li>
                              <li>Those who need help can press an emergency button in the app <strong>Smibby</strong> to ask for help.</li>
                              <li>Enter and modify tasks is always possible.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="hr">

            <div class="speakers-block row-6 container" id="reviews">
              <div class="text-center">
                <h1><input style="width:400px" type="text" name="review_text1" value="'.$content['review_text1'].'"></h1>
                <p class="p-big">
                  <input style="width:400px" type="text" name="review_text2" value="'.$content['review_text2'].'">
                </p>
              </div>
              <ul class="event-speakers clear">
                <li class="col-6-tablet col-3-desktop">
                  <div class="col-12-tablet no-float">
                  <blockquote class="bubble">
                    <p><textarea style="width:200px;height:100px;" name="review_say1">'.$content['review_say1'].'</textarea></p>
                  </blockquote>
                    <a class="event-speaker" href="#">
                      <img class="block" src="img/nathan.jpg" alt="Edward">
                    </a>
                    <h3 class="uppercase h4"><a class="event-speaker-name" href="#"><input style="width:100px" type="text" name="review_prs1" value="'.$content['review_prs1'].'"></a></h3>
                    <p><input style="width:100px" type="text" name="review_plc1" value="'.$content['review_plc1'].'"></p>
                  </div>
                </li>
                <li class="col-6-tablet col-3-desktop">
                  <div class="col-12-tablet no-float">
                  <blockquote class="bubble">
                    <p><textarea style="width:200px;height:100px;" name="review_say2">'.$content['review_say2'].'</textarea></p>
                  </blockquote>
                    <a class="event-speaker" href="#">
                      <img class="block" src="img/nathan_2.jpg" alt="Lucy">
                    </a>
                    <h3 class="uppercase h4"><a class="event-speaker-name" href="#"><input style="width:100px" type="text" name="review_prs2" value="'.$content['review_prs2'].'"></a></h3>
                    <p><input style="width:100px" type="text" name="review_plc2" value="'.$content['review_plc2'].'"></p>
                  </div>
                </li>
                <li class="col-6-tablet col-3-desktop">
                  <div class="col-12-tablet no-float">
                  <blockquote class="bubble">
                    <p><textarea style="width:200px;height:100px;" name="review_say3">'.$content['review_say3'].'</textarea></p>
                  </blockquote>
                    <a class="event-speaker" href="#">
                      <img class="block" src="img/nathan_3.png" alt="Nathan">
                    </a>
                    <h3 class="uppercase h4"><a class="event-speaker-name" href="#"><input style="width:100px" type="text" name="review_prs3" value="'.$content['review_prs3'].'"></a></h3>
                    <p><input style="width:100px" type="text" name="review_plc3" value="'.$content['review_plc3'].'"></p>
                  </div>
                </li>
                <li class="col-6-tablet col-3-desktop">
                  <div class="col-12-tablet no-float">
                  <blockquote class="bubble">
                    <p><textarea style="width:200px;height:100px;" name="review_say4">'.$content['review_say4'].'</textarea></p>
                  </blockquote>
                    <a class="event-speaker" href="#">
                      <img class="block" src="img/nathan_4.png" alt="Jacob">
                    </a>
                    <h3 class="uppercase h4"><a class="event-speaker-name" href="#"><input style="width:100px" type="text" name="review_prs4" value="'.$content['review_prs4'].'"></a></h3>
                    <p><input style="width:100px" type="text" name="review_plc4" value="'.$content['review_plc4'].'"></p>
                  </div>
                </li>
              </ul>
            </div>

            <hr class="hr">

          <div class="footer-block">
            <div class="footer">
              <div class="container-full">
                <div class="clear footer-content-blocks">
                  <div class="footer-content-block col-8-tablet col-9-desktop">
                    <div class="col-11-desktop no-float-desktop">
                      <h3 class="h4 h-white"></h3>
                      <img width="200px" src="img/playstore.png" alt="">
                      <img width="200px" src="img/appstore.png" alt="">
                    </div>
                  </div>
                  <div class="footer-content-block col-4-tablet col-3-desktop">
                    <div class="col-12-desktop no-float-desktop">
                      <h3 class="h4 h-black">Get in touch</h3>
                      <ul class="contact-list">
                        <li><a style="color:black;" class="footer-link icon icon-left icon-phone" href="#"><input style="width:200px" type="text" name="tel" value="'.$content['tel'].'"></a></li>
                        <li><a style="color:black;" class="footer-link icon icon-left icon-email" href="#"><input style="width:200px" type="text" name="mail" value="'.$content['mail'].'"></a></li>
                        <li><a style="color:black;" class="footer-link icon icon-left icon-skype" href="#"><input style="width:200px" type="text" name="desk" value="'.$content['desk'].'"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
                <p>
                  Copyright 2016 Smibby
                </p>
              </div>
            </div>
          </div>
          <input style="margin-top:50px;margin-left:45%;" class="button" type="submit" name="submit" value="Save content">


          <script src="js/vendor/jquery-1.11.3.min.js"></script>
          <script src="js/vendor/webfontloader.js"></script>

          <script src="js/vendor/jquery.mobile.custom.min.js"></script>
          <script src="js/vendor/bootstrap.transition.js"></script>
          <script src="js/vendor/bootstrap.carousel.js"></script>
          <script src="js/vendor/bootstrap.collapse.js"></script>
          <script src="js/vendor/bootstrap.dropdown.js"></script>
          <script src="js/vendor/bootstrap.tab.js"></script>

          <script src="js/vendor/jquery.drawsvg.js"></script>

          <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

          <script src="js/default.js"></script>


          </body>
          </html>
          </form>';

}
?>