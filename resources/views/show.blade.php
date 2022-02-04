<!DOCTYPE html>
<html lang="en">
<title>SELECTION DETAIL PAGE</title>

<?php
include('frontend/head.php');
?>

<body style="background-color:#717fe0">

<?php
include('frontend/header.php');
?>

<link rel="stylesheet" type="text/css" href="/css/delta.css">

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<!-- Title page -->
	<section class="section-a bg-img1 txt-center p-lr-15 p-tb-92" style="background-color:powderblue;">
		<h2 style="font-size:24px" class="ltext-105 cl0 txt-center">
			UNIT DISCOVERY PAGE
		</h2>
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
        <div class="box-desc">
            <img src="/images/slide-01.jpg">
            <h3 class="font-bold">DESCRIPTION</h3>
            <p>
                {{ $domain->description }}
            </p>
        </div>
        <div class="box-info1">
            <img src="/images/slide-01.jpg">
            <h3 class="font-bold">INFO1</h3>
            <p>
                {{ $domain->info1 }}
            </p>
        </div>
          <div class="box-info2">
            <img src="/images/slide-01.jpg">
            <h3 class="font-bold">INFO2</h3>
            <p>
                {{ $domain->info2 }}
            </p>
        </div>
        <div class="box-info3">
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













