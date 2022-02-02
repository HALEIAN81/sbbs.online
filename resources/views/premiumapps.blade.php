<!DOCTYPE html>
<html lang="en">
<title>PREMIUM APPS</title>
<?php
include('frontend/head.php');
?>
<body>

<?php
include('frontend/header.php');
?>

	<!-- Title page -->
	<section class="section-a bg-img1 txt-center p-lr-15 p-tb-60" style="background-color:powderblue;">
		<h2 class="ltext-105 cl0 txt-center">
			PREMIUM APPS FOR SALE
		</h2>
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


    <section>
        <div class="w3-container" style="background-color:powderblue;">
    <center><h1>PREMIUM APPS</h1></center>
    @foreach($domains as $domain)
    <div class="btn-group">

       <a href="inventory"><button>{{  $domain->fullName() }}</button></a>
    </div>
    @endforeach

    </div>
    </section>


<section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
	<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
	  Your Source For Premium Domains And Access To Web Development Services
	</h3>
  </section>

<?php
include('frontend/footer.php');
?>

</body>
</html>
