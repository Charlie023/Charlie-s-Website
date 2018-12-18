<!DOCTYPE html>
<html>
<head>
	<title>Charlie </title>

  <link rel="icon" href="images/logo.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


	<link rel="stylesheet" type="text/css" href="assets/css/website_design.css">
   
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">

	


</head>
<body >

	<?php
		include "html/topnav.php";

	?>	 
 			<!-- Header  -->
	<header class="masthead" style="text-align: center;
		  color: white;
		  background-image: url('images/back(copy).jpg');
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-position: center center;
		  background-size: cover;
		  height: 800px;" id="masthead">
		      <div class="container text-center">
		        <div class="intro-text">
		          <div class="intro-lead-in ml2">Welcome to my Website!</div>              
              	<div class="intro-heading text-uppercase ml2">
                It's Nice To Meet You</div>
		          <a href="#about" class="btn text-uppercase " id="tell" name="tell" style="background:#76B3AC;color: white">Know More About Me</a>
		        </div>
		      </div>
    </header>


<!-- Web knowledge -->
    <section style="background: linear-gradient(to right, #77c9d4 0%, #57bc90 100%)" >
      <div class="container container-fluid" id="webdev" style="padding-top:80px;padding-bottom: 100px;width: 100%">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading " style="font-family: 'Droid Serif',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';font-style: italic;color: white ">Webdev Knowledge</h2>
            <h4 class="section-subheading " style="color: white">This section will show you the tools that I'm using in developing websites.</h4>
          </div>
        </div><br>

      <div class="container rounded" style="background:#2222;color: white; ">
        <div class="row text-center">
                          
            <div class="col-md-4 " data-aos="fade-down-right"  id="qwe" style="padding: 10px;" >            
                  <span class="fa-stack fa-4x" >
                    <img src="images/php.png" style="width:90px;height: 60px;" >
                  </span>

                  <h4 class="service-heading">PHP</h4>
                  <p>PHP (recursive acronym for PHP:<strong> Hypertext Preprocessor</strong>) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML</p>  
                <a class="btn btn-info" href="http://www.php.net/" target="_blank">Learn PHP</a>
            </div>
                  
       
          <div class="col-md-4 " data-aos="fade-down"  id="qwe" style="padding: 10px;">
            <span class="fa-stack fa-4x">
               <img src="images/css.png" style="width:100px;height: 80px;">
            </span>
            <h4 class="service-heading">CSS</h4>
            <p >CSS is the language for describing the presentation of Web pages, including colors, layout, and fonts. It allows one to adapt the presentation to different types of devices, such as large screens, small screens, or printers. </p>
             <a class="btn btn-info" href="https://css-tricks.com/"  target="_blank">Learn CSS</a>
          </div>

          <div class="col-md-4 " data-aos="fade-down-left"   id="qwe" style="padding: 10px;" >
            <span class="fa-stack fa-4x">
             <img  src="images/boot.png" style="width:100px;height: 90px;margin-top: 20px">
            </span>
            <h4 class="service-heading">Bootstrap</h4>
            <p >Bootstrap is a free and open source front end development framework for the creation of websites and web apps. The Bootstrap framework is built on HTML, CSS, and JavaScript (JS) to facilitate the development of responsive, mobile-first sites and apps.
              </p>
              <a class="btn btn-info" href="https://www.w3schools.com/bootstrap4/"  target="_blank">Learn Bootstrap</a>
          </div>     

          <div class="col-md-4 " data-aos="fade-up-right" id="qwe" style="padding: 10px;">
            <span class="fa-stack fa-4x">
              <img src="images/html.png" style="width:100px;height: 90px;margin-top: 20px">
            </span>
            <h4 class="service-heading">HTML</h4>
            <p >HTML stands for Hyper Text Markup Language.           
              HTML tags label pieces of content such as "heading", "paragraph", "table", and so on
              Browsers do not display the HTML tags, but use them to render the content of the page.</p>
              <a class="btn btn-info" href="https://www.learn-html.org/"  target="_blank">Learn HTML</a>
          </div>
          
          <div class="col-md-4 " data-aos="fade-up" id="qwe" style="padding: 10px;" >
            <span class="fa-stack fa-4x">
              <img src="images/javascript.png" style="width:90px;height: 80px;margin-top: 20px">
            </span>
            <h4 class="service-heading">Javascript</h4>
            <p >JavaScript is a scripting language used to create and control dynamic website content but, that might make a lot of sense if you are new to tech. So let us replace dynamic website content with things that move, refresh, or otherwise change on your screen without requiring you to manually reload a web page.</p>
            <a class="btn btn-info" href="https://www.w3schools.com/js/"  target="_blank">Learn Javascript</a>
          </div>
          
          <div class="col-md-4 " data-aos="fade-up-left" id="qwe" style="padding: 10px;">
            <span class="fa-stack fa-4x">
               <img src="images/jquery.png" style="width:90px;height: 80px;margin-top: 20px">
            </span>
            <h4 class="service-heading">Jquery</h4>
            <p >jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.  </p>
            <a class="btn btn-info" href="https://www.w3schools.com/jquery/"  target="_blank">Learn Jquery</a>
          </div>        
        
          </div>
        </div>
      </div>
    </section>

    <style type="text/css">
      .service-heading{
        padding-top: 10px;
      }
    </style>

    <!-- About -->
    <section style=" background-image: url('images/laptop.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center center;
      background-size: cover;
      ">
      <div class="container"  id="about" style="padding-top: 80px;padding-bottom: 80px;">
        <div class="row">
          <div class="col-lg-12 text-center" >
            <h2 class="section-heading text-uppercase " style="color: white">About </h2> 
            <h4 class="section-subheading " style="margin-bottom: 30px;color: white">This section is about me and some of the websites that I made including this website.</h4>          
          </div>
        </div>
        <div class="container rounded" style="background:#2226;padding: 30px;">
              <div class="row" style="margin-bottom: 10px;" >
                  <div data-aos="fade-right"class="col-md-6 text-left rounded" style="padding:30px;" >
                      <h3  style="color: white">Me and this Website</h3>
                      <p style="color: white">Hi! I'am Charlie Matanguihan, a 4th year student currently studying Bachelor of Science in Information Technology at Polytechnic University of the Philippines located at Sto.Tomas, Batangas </p>
                  </div>
                      <div data-aos="zoom-in"  class="col-md-6">
                            <img class="d-block w-100 rounded" src="images/back.png" style="width: 100%; height:400px;">
                      </div>
              </div>

               <div class="row" style="margin-bottom: 10px;" >                  
                      <div data-aos="zoom-in"  class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 rounded" src="images/front.png" alt="Peek-a-Book">
                                  </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/books.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/account.png" alt="Third slide">
                                </div>
                                 <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/cart.png" alt="Third slide">
                                </div>
                                 <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/aboutpage.png" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>                        
                      </div>
                      <div data-aos="fade-left" class="col-md-6 text-left rounded" style="padding: 30px;"  >
                      <h3  style="color: white;">Peek-a-Book</h3>
                      <p style="color: white">Peek-a-Book, an E-Commerce Website made for the students who finds themselves difficulty in finding the books that they wanted.   </p>
                      <a class="btn btn-info float-right" href="https://peek-abook.com/"  target="_blank">Visit Peek-a-Book Website</a>

                  </div>
              </div> 

               <div class="row" style="margin-bottom: 10px;" >
                  <div data-aos="fade-right"class="col-md-6 text-left rounded" style="padding:30px;" >
                      <h3  style="color: white">Nexus Raffle System</h3>
                      <p style="color: white">This website system is intended to use for the Nexus Tecnologies, Inc Christmas Party</p>
                  </div>
                      <div data-aos="zoom-in"  class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100 rounded" src="images/rafflefront.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/adduser.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/winnerslog.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/prize.png" alt="Third slide">
                                </div>                            
                                <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/printuserlist.png" alt="Third slide">
                                </div>
                                 <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/printwinners.png" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100 rounded" src="images/printitem.png" alt="Third slide">
                                </div>                                                              
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                      </div>
              </div>

        </div>
      </div>
    </section> 

    <!-- contact section -->
    <section style=" margin-top: 20px; 
    background: linear-gradient(to top, #0054ff 0%, #33ccff 100%);">
      <div class="container"  id="contact" style="padding-top:30px;padding-bottom:30px; ">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class=" text-uppercase" style="color: white;">Comments and Suggestions </h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        
        <div class="row rounded " style="margin-bottom: 30px; background:#2222;padding: 20px">
          <div data-aos="fade-right" class="col-md-6 col-lg-6 " style="padding: 20px; "> 
              <div class="container">
                <h6 style="color: white;">Leave your comments and suggestions about my website here: </h6>
              </div> 
              
                <input required class="form-control rounded" type="text" name="name" id="name" placeholder="Name" />

                <input required class="form-control rounded" type="email" name="email" id="email" placeholder="Email" />                 
                <textarea required class="form-control" placeholder="Comments and Suggestions" rows="5" id="comments" name="comments"></textarea>       
                         
                <button class="btn btn-default rounded float-right " id="buttony" name="buttony">Submit</button>
                          
           </div>
           <div data-aos="fade-left" class="col-md-6 col-lg-6" style="padding: 20px;" >  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8002136.8032161845!2d118.12584756270661!3d11.67360945266276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x324053215f87de63%3A0x784790ef7a29da57!2sPhilippines!5e0!3m2!1sen!2sph!4v1544775353297"  frameborder="0" style="border:0;width: 100%;height: 100%" allowfullscreen></iframe>          
           </div>             
          
        </div>
      </div>
    </section>  

    <style type="text/css">
      input.form-control, textarea.form-control  {
        margin: 20px;
        margin-bottom: 20px;
        width: 90%;
      }
      #buttony{
        width: 20%;
        margin-right: 30px;
      }
    </style>  

        <button class="cd-top js-cd-top btn rounded " ><i class="fa fa-angle-double-up icon-4x" ></i></button>

      <?php
		include "html/footer.php";
	?>

<script type="text/javascript" src="assets/js/main.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800
  });
});



 
</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="assets/js/aos.js"></script>
<script type="text/javascript">
AOS.init();
</script>


 
</body>
</html>