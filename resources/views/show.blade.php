<!DOCTYPE html>
<html lang="en">
<title>SELECTION DETAIL PAGE</title>

<?php
include('frontend/head.php');
?>

<body>

<?php
include('frontend/header.php');
?>

<link rel="stylesheet" type="text/css" href="/css/delta.css">

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<section>
    <div class="single-info">{{ $domain->id }} | {{ $domain->name }} | {{ $domain->domain_name }} | {{ $domain->type }}</div>
</section>

	<!-- Title page -->
	<section class="section-a bg-img1 txt-center p-lr-15 p-tb-92" style="background-color:powderblue;">
		<h2 style="font-size:24px" class="ltext-105 cl0 txt-center">
			UNIT DISCOVERY PAGE
		</h2>
	</section>

	<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
		<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
			Your Source For Premium Domains And Access To Web Development Services
		</h3>
	</section>
	<!-- Content page -->

	<div class="container-listing" style="background-color:black;">
              <div class="box">
                <img src="/images/slide-16.jpg">
                <h3>{{ $domain->domain_name }}</h3>
                <div>
                    <div class="row">
                    <div class="column">
                        <h4>TYPE</h4>
                        <p>{{ $domain->type }}</p>
                    </div>
                    <div class="column">
                        <h4>INDUSTRY</h4>
                        <p>{{ $domain->industry }}</p>
                    </div>
                    <div class="column">
                        <h4>AGE OF SITE(Y)</h4>
                        <p>{{ $domain->unit_age }}</p>
                    </div>
                    <div class="column">
                        <h4>STATUS</h4>
                        <p>{{ $domain->status }}</p>
                    </div>
                  </div>
                </div>
             </div>
</div>

<div class="containerz" style="background-color:powderblue;">
        <div class="box">
            <img src="/images/slide-01.jpg">
            <h3 class="font-bold">DESCRIPTION</h3>
            <p>
                {{ $domain->description }}
            </p>

        </div>
        <div class="box">
            <img src="/images/slide-01.jpg">
            <h3 class="font-bold">INFO1</h3>
            <p>
                {{ $domain->info1 }}
            </p>

        </div>

          <div class="box">
            <img src="/images/slide-01.jpg">
            <h3 class="font-bold">INFO2</h3>
            <p>
                {{ $domain->info2 }}
            </p>

        </div>

        <div class="box">
            <img src="/images/slide-01.jpg">
            <h3 class="font-bold">INFO3</h3>
            <p>
                {{ $domain->info3 }}
            </p>
        </div>

</div>

<?php
include('frontend/footer.php');
?>

</body>
</html>













