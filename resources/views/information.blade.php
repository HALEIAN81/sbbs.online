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

	<!-- Title page -->
	<section class="section-a bg-img1 txt-center p-lr-15 p-tb-92" style="background-color:powderblue;">
		<h2 class="ltext-105 cl0 txt-center">
			UNIT RESEARCH PAGE
		</h2>
	</section>

    <section>
        <div>{{ $domain->id }} | {{ $domain->name }} | {{ $domain->domain_name }} | {{ $domain->type }}</div>
    </section>


	<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
		<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
			Your Source For Premium Domains And Access To Web Development Services
		</h3>
	</section>
	<!-- Content page -->

	<div class="container-listing" style="background-color:black;">
              <div class="box">
                <img src="./images/slide-16.jpg">
                <h3>Name of Domain/App</h3>
                <div>
                    <div class="row">
                    <div class="column">
                        <h4>Type</h4>
                        <p>Website</p>
                    </div>
                    <div class="column">
                        <h4>Industry</h4>
                        <p>Business</p>
                    </div>
                    <div class="column">
                        <h4>Monetization</h4>
                        <p>Ads</p>
                    </div>
                    <div class="column">
                        <h4>Age of Site</h4>
                        <p>5 Years</p>
                    </div>
                    <div class="column">
                        <h4>Est. Net Profit</h4>
                        <p>$$$$ per mo.</p>
                    </div>
                  </div>
                </div>
                  <div class="da-description">
                    <h5>DESCRIPTION:</h5>
                    <p>Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
                        Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
                    </p>
                  </div>

                  <div>
                    <button class="listing-link" type="button">Listing Detail</button>
                </div>
                <div>
                    <button class="track" type="button">Keep Track</button>
                </div>
              </div>
</div>

<div class="containerz" style="background-color:powderblue;">
        <div class="box" style="box-shadow: 5px 10px 10px purple;">
            <img src="./images/slide-01.jpg">
            <h3 class="font-bold">DESCRIPTION</h3>
            <p>
                Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
                        Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
            </p>

        </div>
        <div class="box" style="box-shadow: 5px 10px 10px purple;">
            <img src="./images/slide-01.jpg">
            <h3 class="font-bold">INFO1</h3>
            <p>
                Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
                        Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
            </p>

        </div>

          <div class="box" style="box-shadow: 5px 10px 10px purple;">
            <img src="./images/slide-01.jpg">
            <h3 class="font-bold">INFO2</h3>
            <p>
                Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
                        Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
            </p>

        </div>

        <div class="box" style="box-shadow: 5px 10px 10px purple;">
            <img src="./images/slide-01.jpg">
            <h3 class="font-bold">INFO3</h3>
            <p>
                Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
                        Ad incididunt ullamco minim consectetur ipsum magna aliquip amet incididunt.
            </p>
        </div>

</div>

<?php
include('frontend/footer.php');
?>

</body>
</html>
