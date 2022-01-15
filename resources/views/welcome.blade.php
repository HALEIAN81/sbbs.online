<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GO2DOMAINSALES</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> --}}

    </head>

    <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full containerx">
            <div class="left-top-bar">
                <h4>We Sell Premium Domains, Hosting and Web Services.</h4>
            </div>

            <div class="">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" style="color: white" class="text-sm text-white-700 dark:text-white-500">DASHBOARD</a>
                        @else
                            <a href="{{ route('login') }}" style="color: white" class="text-sm text-white-700 dark:text-white-500">LOGIN</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="color: white" class="ml-4 text-sm text-white-700 dark:text-white-500">REGISTER</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
    </div>

    <?php
include('frontend/head.php');
?>
<body>

<?php
include('frontend/header.php');
?>

    {{-- <body class="antialiased"> --}}

<section class="head-section txt-center p-lr-50 p-tb-18" style="background-color:powderblue;">
<h1 class="ltext-106 c10 txt-center">
			WELCOME TO GO2DOMAINSALES
</h1>
</section>

<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
		<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
			Your Source For Premium Domains And Access To Web Development Services
		</h3>
</section>

<center>
<form class="site-search" action="">
  <input type="text" placeholder="Search Our Premium Domains Here" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</center>

<div class="w3-container p-tb-20" style="background-color:powderblue;">
    <center><h2>PREMIUM DOMAIN MARKET</h2><center>
    <div class="btn-group jc-center">
          <button>Domain01</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain02</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain03</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain04</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain05</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain06</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain07</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain08</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain09</button>
    </div>
    <div class="btn-group flex-parent jc-center">
          <button>Domain10</button>
    </div>
    </div>

<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
        <h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
            Get a Free Website Development Consultation today! Call us today!
        </h3>
</section>

<div class="containery" style="background-color:purple;">
    <div class="box">
            <img src="./images/slide-04.jpg">
            <h3>DOMAINS</h3>
            <p>
              We offer access to re-sell of premium domains from our users as well as reduced
              pricing on website launch and deployment from our own professional website
              development team. We offer our members SEO setup and optimization to boost the
              marketability of the domains they wish to re-sell while also promoting those sites
              here.
            </p>
            <center><a href="domains.blade.php"><div>Learn More </div></a></center>
          </div>
          <div class="box">
            <img src="./images/slide-07.jpg">
            <h3>HOSTING</h3>
            <p>
              We focus on providing affordable web hosting services to help support your
              current web projects, so you can focus on promoting your business. We also help
              with setting up your SSL certificates for optimal security as well as database
              support for our clients.
            </p>
            <center><a href="hosting.blade.php"><div>Learn More </div></a></center>
          </div>

          <div class="box">
            <img src="./images/slide-03.jpg">
            <h3>WEB SERVICES</h3>
            <p>
              We offer custom designs for your website that is created by our own dedicated
              professional website development team. We create SEO-friendly content that
              increases your web traffic while your custom design creates a unique user experience
              for your portfolio, ecommerce or business services site.
            </p>
            <center><a href="webdev.blade.php"><div>Learn More </div></a></center>
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
