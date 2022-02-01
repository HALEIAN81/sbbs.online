<!DOCTYPE html>
<html lang="en">
<title>APPS AND DOMAINS DETAILS</title>

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
			APPS AND DOMAINS DETAILS
		</h2>
	</section>


	<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
		<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
			Your Source For Premium Domains And Access To Web Development Services
		</h3>
	</section>
	<!-- Content page -->

    <section>
	<div class="container-details" style="background-color:black;">
        @foreach($domains as $domain)
        <card>
        <div class="box">
            <div class="row">
            <div class="column">
                <img src="{{ asset('storage/'. $domain->image) }}">
            </div>
            <div>
                <h3>{{ $domain->domain_name }}</h3>
            </div>
                <div class="column">
                    <h4>Type</h4>
                    <p>{{ $domain->type }}</p>
                </div>
                <div class="column">
                    <h4>Industry</h4>
                    <p>{{ $domain->industry }}</p>
                </div>
                <div class="column">
                    <h4>Unit Age</h4>
                    <p>{{ $domain->unit_age }}</p>
                </div>
                <div class="column">
                    <h4>Price</h4>
                    <p>${{ $domain->price }}</p>
                </div>
                <div class="da-description">
                    <h5>DESCRIPTION:</h5>
                    <p>{{ $domain->description }}
                    </p>
                </div>
                <div>
                    <a href="chart_info.blade.php"><button class="listing-link" type="button">Listing Detail</button></a>
                </div>
                <div>
                    <button class="track" type="button">Keep Track</button>
                </div>
            </div>
            </div>
           @endforeach
        </card>
    </section>


<?php
include('frontend/footer.php');
?>

</body>
</html>
