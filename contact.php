<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>Company-HTML Bootstrap theme</title> -->
  <title>QSoft Consultancy</title>
  <link rel="icon" href="./logo/QSoft Consultancy.png" size="20*20"/>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5a4a1e85d7591465c706764f/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>

  <?php  include "header.php"; ?>
  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Contact</li>
      </div>
    </div>
  </div>

  <div class="map">
    <br>
    <!-- <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60498.460921265054!2d73.75820647155643!3d18.612150490657775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bc2b901eaea00d3%3A0x54f492a71f94d433!2sSai%20Kashish%20Park%2C%20Near%20Paramveer%20Colony%2C%20Rajwade%20Nagar%2C%20Rajwade%20Nagar%2C%20Sai%20Shraddha%20Colony%2C%20Kalewadi%2C%20Pune%2C%20Maharashtra%20411017!3m2!1d18.6120724!2d73.793312!5e0!3m2!1sen!2sin!4v1575883170211!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1891.6647170721121!2d73.86933958531954!3d18.51400935503029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46edf8af77cb2cd6!2sQSoft Consultancy+Web+Solution+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1519643270052" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
  </div>

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Drop Your Message</h2>

      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          <span id="msg"></span>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form  method="post" role="form" class="contactForm" id="feedback">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required ata-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required ata-rule="email" data-msg="Please enter a valid email" autocomplete="off"/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  autocomplete="off" required />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" required ata-msg="Please write something for us" placeholder="Message"  autocomplete="off"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><input type="submit" name="submit" class="btn btn-primary btn-lg" required="required" value="Submit Message"></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Feel free to contact us...</h2>
        <h3 style="text-align:center;">Premchand Sahu</h3>
        <h3 style="text-align:center;">Contact No: 7985920176</h3>
        <h4 style="text-align:center;">B706, Sai Kashish Park, Paramvir colony, Rajwade Nagar, Kalewadi, Pune -17 </h4>

      </div>

  </section>
  <!--/#contact-page-->
<?php include "partnersection.php"; ?>
  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy;All Rights Reserved.
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              QSoft Consultancy Pvt.Ltd
              <!-- <a href="https://bootstrapmade.com/bootstrap-business-templates/">Bootstrap Business Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIihdAo5iLRFwgfSVcoJb0oFa9CAToh7Q">
  </script>
  <script src="js/functions.js"></script>
  <!--<script src="contactform/contactform.js"></script>-->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function()
  {
    $('#feedback').on("submit",function(event)
  {
    event.preventDefault();

    $.ajax({
    url:"getFeedback.php",
    method:"POST",
    data:$('#feedback').serialize(),
    success:function(data)
    {
    var msg ="success";
    //$("#msg").html(msg);
alert("Your message has been sent. Thank you!");
    }
  });
  });
});
  </script>
</body>

</html>
