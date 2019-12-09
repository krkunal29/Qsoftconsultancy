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
  <script src="js/tawkapi.js">
  </script>
</head>

<body>

  <?php  include "header.php"; ?>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Careers</li>
      </div>
    </div>
  </div>

  <section id="portfolio">
    <div class="container">
      <div class="center">
        <!-- Pricing -->

        <div class="block-contained">
<br>
        <img src="./images/slider/bg7.jpg" width="100%" height="100%"></img>
          </div>
          <br>
            <div class="row contact-wrap">
              <div class="status alert alert-success" style="display: none"></div>
              <div class="col-md-6 col-md-offset-3">
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
                    <input type="text" class="form-control" pattern="[0-9]{10}" name="contact" id="contact" placeholder="Your contact" required autocomplete="off"/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control" name="file" id="subject"  required />
                    <div class="validation"></div>
                  </div>

                  <div class="text-center"><input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" required="required" value="Submit Message"></div>
                </form>
                <div class="row"><p></p>
                </div>
              </div>
            </div>
      </div>
    </div>
  </section>
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
            &copy; All Rights Reserved.
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
  <script src="js/functions.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function()
  {
    //  alert("ok");
    $('#feedback').on("submit",function(event)
  {
    event.preventDefault();
   // alert("goes here");
    $.ajax({
    url:"getCareer.php",
    method:"POST",
    data:$('#feedback').serialize(),
    success:function(data)
    {
       // alert(data);
   // var msg ="success";
    //$("#msg").html(msg);
 alert("Thank you !!! We submit your response.");
    }
  });
  });
});
  </script>
<!--<script type="text/javascript">-->
<!--  $(document).ready(function(){-->
<!--    $('#feedback').on("submit",function(event)-->
<!--    {-->
<!--      alert("Thank you !!! We submit your response.");-->
<!--    });-->
<!--  });-->
<!--</script>-->
</body>

</html>
