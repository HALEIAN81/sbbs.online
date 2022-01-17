<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GO2DOMAINSALES</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full containerx">
            <div class="">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" style="color: white; text-decoration:none" class="dashboard text-sm text-white-700 dark:text-white-500">DASHBOARD</a>
                        @else
                            <a href="{{ route('login') }}" style="color: white; text-decoration:none" class="user-login text-sm text-white-700 dark:text-white-500 text-align:right">LOGIN</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="color: white; text-decoration:none" class="user-register ml-4 text-sm text-white-700 dark:text-white-500">REGISTER</a>
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
    <center><h2>PREMIUM DOMAINS MARKET</h2><center>
    <div class="btn-group">
          <button>Domain01</button>
    </div>
    <div class="btn-group">
          <button>Domain02</button>
    </div>
    <div class="btn-group">
          <button>Domain03</button>
    </div>
    <div class="btn-group">
          <button>Domain04</button>
    </div>
    <div class="btn-group">
          <button>Domain05</button>
    </div>
    <div class="btn-group">
          <button>Domain06</button>
    </div>
    <div class="btn-group">
          <button>Domain07</button>
    </div>
    <div class="btn-group">
          <button>Domain08</button>
    </div>
    <div class="btn-group">
          <button>Domain09</button>
    </div>
    <div class="btn-group">
          <button>Domain10</button>
    </div>
    </div>
</section>

<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
        <h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
            Get a Free Website Development Consultation today! Call us today!
        </h3>
</section>

<center>
    <form class="site-search" action="">
      <input type="text" placeholder="Search Our Premium Domains Here" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </center>

<div class="containery" style="background-color:purple;">
    <div class="box">
            <img src="./images/slide-04.jpg">
            <h3 class="font-bold">DOMAINS</h3>
            <p>
              We offer access to re-sell of premium domains from our users as well as reduced
              pricing on website launch and deployment from our own professional website
              development team. We offer our members SEO setup and optimization to boost the
              marketability of the domains they wish to re-sell while also promoting those sites
              here.
            </p>
            <center><a href="domains.blade.php"><div class="text-black hover:text-red-300">Learn More </div></a></center>
          </div>
          <div class="box">
            <img src="./images/slide-07.jpg">
            <h3 class="font-bold">HOSTING</h3>
            <p>
              We focus on providing affordable web hosting services to help support your
              current web projects, so you can focus on promoting your business. We also help
              with setting up your SSL certificates for optimal security as well as database
              support for our clients so you can rest easy that your client's data is protected and safe.
            </p>
            <center><a href="hosting.blade.php"><div class="text-black hover:text-red-300">Learn More </div></a></center>
          </div>

          <div class="box">
            <img src="./images/slide-03.jpg">
            <h3 class="font-bold">WEB SERVICES</h3>
            <p>
              We offer custom designs for your website that is created by our own dedicated
              professional website development team. We create SEO-friendly content that
              increases your web traffic while your custom design creates a unique user experience
              for your portfolio, ecommerce or business services site.
            </p>
            <center><a href="webdev.blade.php"><div class="text-black hover:text-red-300">Learn More </div></a></center>
    </div>
</div>

    </body>

<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
        <h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
            Get a Free Website Development Consultation today! Call us today!
        </h3>
</section>

<?php
include('frontend/footer.php');
?>

</body>
</html>
