<!DOCTYPE html>
<html lang="en">
<title>ABOUT GO2DOMAINSALES</title>
<?php
include('frontend/head.php');
?>
<body>

<?php
include('frontend/header.php');
?>

	<!-- Title page -->
	<section class="section-a bg-img1 txt-center p-lr-15 p-tb-92" style="background-color:powderblue;">
		<h2 class="ltext-105 cl0 txt-center">
			ABOUT US
		</h2>
	</section>

    <section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
		<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
			Your Source For Premium Domains And Access To Web Development Services
		</h3>
	</section>


	<!-- Content page -->
<section class="section-about bg0 p-t-36 p-b-36" style="background-color:powderblue; background-size:cover">
<div align=center>
        <h1 style="color:purple">Who We Are</h1>
		<p style="color:purple"> Our goal is to be a partner in fostering a growing, changing digital world where people can have a chance to grow their businesses. We are
            uniquely positioned to ensure all of your online needs are met, from purchasing a premium domain that helps you get a jump on getting started to helping you with setup
            and customization of your site to ensure all of your needs are met. Our professionals have been providing web services for over 15 years and we offer that level of
            dedication and knowledge to you at an affordable price.
        </p>
        <p style="color:purple"> Here at Go2DomainSales we help you put your best foot forward with winning domains, customized sites as well as SEO and marketing services that
            drive the traffic to your site and helps you grow your business.
        </p>

</div>
</section>
<section class="section-about bg0 p-t-36 p-b-36" style="background-color:powderblue; background-size:cover">
    <div align=center>
        <h1 style="color:purple">Our Services</h1>
            <p style="color:purple">We help all businesses succeed in today's internet dependent world. We offer a range of professional services to ensure that you
                have access to all the things you need to make your business unique and grow your business. We focus on those companies looking for professional help
                to help them get ahead and we offer affordable solutions for all of your web needs.
            </p>
            <p style="color:purple">Our professionals provide help with your website needs, ecommerce setup and solutions, SEO optimization and marketing, as well as
                help with social media content and promotion.
            </p>
    </div>
</section>
<section class="section-about bg0 p-t-36 p-b-36" style="background-color:powderblue; background-size:cover">
    <div align=center>
        <h3 style="color:purple">Why Choose Us?</h3>
        <h3 style="color:purple">Our focus is to give you the best foot forward with your domain of choice - increase your leads, create your funnel, have the best site
            built for your needs and market your e-commerce site to thousands of customers with our services.
        </h3>
    </div>
</section>

<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
    <h1 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
        Dependable Website Hosting...Guaranteed!
    </h1>
</section>

<section class="section-quote p-tb-40" style="background-color: powderblue;">
    <div>
 	<h3 class="" style="color:purple;">
		Get A Quote Today!
	</h3>
    <p>Fill out the information below and</p>
    <p>Click the button below to contact us and get a quote on your project right away!</p>
    <form>
        <div>
        <label for="fname"></label>
        <input type="text" id="fname" name="fname" placeholder="First Name: ">
        <label for="lname"></label>
        <input type="text" id="lname" name="lname" placeholder="Last Name: ">
        <label for="phone"></label>
        <input type="number" id="phone" name="phone" placeholder="Phone: ">
        <label for="email"></label>
        <input type="text" id="email" name="email" placeholder="Email: ">
        <a href="" action="mailto:roland@adsitepro.com" method="POST" enctype="multipart/form-data"><button>GET A QUOTE</button></a>
        <input id="myBtn" type="button" name='submit' value='Schedule A Call' title='Schedule A Call' />
        <h6>*By providing your information above you also provide written consent to Go2Domainsales.com to contact you.</h6>
        <h6>Please see Privacy Policy below for more information.</h6>
        </div>
    </form>
    </div>
</section>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: purple;
      margin: auto;
      padding: 20px;
      border: 1px solid white;
      width: 60%;
    }

    .modal-content p {
        color: white;
        font-size: 22px;
        font-weight: bolder;
    }

    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: white;
      text-decoration: none;
      cursor: pointer;
    }
    </style>
    </head>
    <body>

    <h2>Modal Example</h2>

    <!-- Trigger/Open The Modal -->
     <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>To Schedule A Call:</p>
        <p>Choose a Date and Time from Below:</p>
        <img src="./images/slide-24.jpg">
      </div>

    </div>

    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>


<?php
include('frontend/footer.php');
?>

</body>
</html>
