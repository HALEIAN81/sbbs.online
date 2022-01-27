<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GO2DOMAINSALES</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        ...
        @livewireStyles

    </head>

    <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full containerx">
            <div class="">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="dashboard" style="{color: white; :visited {color: white :hover color: orange} text-decoration:none" class="dashboard text-sm text-white-700 dark:text-white-500">DASHBOARD</a>
                        @else
                            <a href="{{ route('login') }}" style="color: white; text-decoration:none :visited {color: white :hover color: orange}" class="user-login font-bold text-sm text-white dark:text-white-500">LOGIN</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="color: white; text-decoration:none" class="user-register font-bold ml-4 text-sm text-white dark:text-white-500">REGISTER</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
    </div>
<div>

<?php
include('frontend/head.php');
?>
<body>

<?php
include('frontend/header.php');
?>
</div>

<section>
    <div class="w3-container p-tb-0" style="background-color:powderblue;">
        <h2>PREMIUM DOMAINS AND APPS MARKET</h2>
            @foreach($domains as $domain)
            <div class="btn-group">
               <a href="inventory_table.blade.php"><button>{{ $domain->fullName() }}</button></a>
            </div>
            @endforeach
        </div>
</section>

<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
    <h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
        Get a Free Website Development Consultation today! Call us today!
    </h3>
</section>

<center>
    <form class="site-search" action="">
      <input type="text" placeholder="Search Our Premium Domains/Apps Here" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</center>

<section class="section-a bg-img1 p-lr-15 p-tb-160" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
    <h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
        Your Source For Premium Domains And Access To Web Development Services
    </h3>
</section>

<div class="containery" style="background-color:purple;">
    <div class="box">
            <img src="./images/slide-04.jpg">
            <h3 class="font-bold">DOMAINS</h3>
            <p>
              We offer access to re-sell of premium domains from our users as well as reduced
              pricing on website launch and deployment from our own professional website
              development team. Also our members receive SEO setup and optimization to boost the
              marketability of the domains they wish to re-sell while also promoting those sites
              here.
            </p>
            <center><a href="domains.blade.php"><div class="text-purple-800 hover:text-red-300">LEARN MORE </div></a></center>
        </div>
        <div class="box">
            <img src="./images/slide-07.jpg">
            <h3 class="font-bold">HOSTING</h3>
            <p>
              We focus on providing affordable web hosting services to help support your
              current web projects, so you can focus on promoting your business. Setting up your SSL
              certificates for optimal security is only a phone call away as well as database
              support for our clients so you can rest easy that your client's data is protected and safe.
            </p>
            <center><a href="hosting.blade.php"><div class="text-purple-800 hover:text-red-300">LEARN MORE </div></a></center>
        </div>

          <div class="box">
            <img src="./images/slide-03.jpg">
            <h3 class="font-bold">WEB SERVICES</h3>
            <p>
              We offer custom designs for your website that is created by our own dedicated
              professional website development team. We create SEO-friendly content that
              increases your web traffic while your custom design creates a unique user experience
              for your portfolio, ecommerce or business services site. Trust us with your business
              development and user interactions.
            </p>
            <center><a href="webdev.blade.php"><div class="text-purple-800 hover:text-red-300">LEARN MORE </div></a></center>
        </div>
</div>

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
    ...
    @livewireScripts
</body>
</html>
