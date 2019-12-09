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

</head>

<body>
  <!-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5a4a1e85d7591465c706764f/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> -->
  <?php  include "header.php"; ?>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Services</li>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <h3>Company Services</h3>
      <hr>
      <div class="col-md-6">
        <img src="images/laptop.jpg" class="img-responsive">
        <p>As an industry leader we specialise in website design and development, ecommerce  design, mobile & web application development, graphic design, and online marketing.
        </p><p>With the mission of leading our clients to success our strategic and goal oriented solutions enable our clients to stay ahead of the competition in the ever changing digital landscape.</p>
      </div>

      <div class="col-md-6">
        <div class="media">
          <ul>
            <li>
              <div class="media-left">
                <i class="fa fa-laptop"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Web Design</h4>
                <p>We create intuitive, user-friendly websites that allow your visitors to remain in control and enable you to automate your business processes. From enticing call-to action to social media integration, we offer numerous intuitive features to engage your visitors with your website.</p>
              </div>
            </li>
            <li>
              <div class="media-left">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">eCommerce Website</h4>
                <p> We custom build every eCommerce website paying special attention to maximise customer satisfaction while minimising the cost of trading online. We can build your ecommerce website in Magento, WordPress, Joomla, Drupal or our own platform WebCommander, developed with eCommerce flexibilities in mind.</p>
              </div>
            </li>
            <li>
              <div class="media-left">
                <i class="fa fa-mobile"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Application Development</h4>
                <p>Our experienced web application development team has developed a comprehensive suite with numerous tools for creating world class web applications, customised CMS, CRM, custom ecommerce and shopping cart solutions, online portals, mobile and desktop applications.</p>
              </div>
            </li>

            <li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="sub-services">
    <div class="container">
      <div class="col-md-6">
        <div class="media">
          <ul>

            <li>
              <div class="media-left">
                <i class="fa fa-search"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">SEO</h4>
                <p>With a team of online marketing experts, we provide a wide range of solutions that include Search Engine Marketing (SEM), Search Engine Optimisation (SEO), Pay Per Click (PPC) and Google AdWords management. We provide effective strategy to improve ranking and conversion based on our extensive research on how the consumers behave online and what kind of marketing will gain the most traction for your business. </p>
              </div>
            </li>
            <li>
              <div class="media-left">
                <i class="fa fa-rocket"></i>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Online Marketing</h4>
                <p>With a team of online marketing experts, we provide a wide range of solutions that include Search Engine Marketing (SEM), Search Engine Optimisation (SEO), Pay Per Click (PPC) and Google AdWords management. We provide effective strategy to improve ranking and conversion based on our extensive research on how the consumers behave online and what kind of marketing will gain the most traction for your business</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6">
        <img src="images/4.jpg" class="img-responsive">
          </div>
    </div>
  </div>
  <div class="services">
    <div class="container">
      <h3>Schedule An Appointment</h3>
      <hr>
      <div class="col-md-6">
          <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <div class="col-md-10 col-md-offset-3">
              <span id="msg"></span>
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form  method="post" role="form" class="contactForm" id="feedback" >
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required ata-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required ata-rule="email" data-msg="Please enter a valid email" autocomplete="off" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" pattern="[0-9]{10}" name="contactno" id="contactno" placeholder="Contact Number" required ata-rule="email" data-msg="Please enter a valid email" autocomplete="off" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                    <!-- <label for="date">Select Date</label> -->
                  <input type="date" class="form-control" name="date1" id="subject" placeholder="Subject"  autocomplete="off" required />
                  <!-- <div class="validation"></div> -->
                </div>
                <div class="form-group">
                  <!-- <label for="date">Select Date</label> -->
                  <input type="time" class="form-control" name="time1" id="subject" placeholder="Subject"  autocomplete="off" required />
                  <!-- <div class="validation"></div> -->
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required"  ata-msg="Please write something for us" placeholder="Optional"  autocomplete="off"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><input type="submit" name="submit" class="btn btn-primary btn-lg" required="required" value="Schedule an Appointment"></div>
</form>
            </div>
          </div>

        <!-- <img src="images/laptop.jpg" class="img-responsive"> -->
        </div>

      <div class="col-md-6">

      </div>
    </div>
  </div>
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
    // alert("ok");
    $('#feedback').on("submit",function(event)
  {

    event.preventDefault();

    $.ajax({
    url:"getAppointment.php",
    method:"POST",
    data:$('#feedback').serialize(),
    success:function(data)
    {
alert("Thank you!");
    }
  });
  });
});
  </script>
</body>

</html>
