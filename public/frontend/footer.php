	<!-- Footer -->
	<footer class="bg3 p-t-20 p-b-0 footer-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-lg-3 p-b-5">
					<center><h4 class="stext-301 cl0 p-b-10" style="color:orange;">
						Resources
					</h4>
					</center>

					<center>
					<ul>
						<li class="p-b-10">
							<a href="about.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								About G2DS
							</a>
						</li>

						<li class="p-b-10">
							<a href="domains.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Domains for Sale
							</a>
						</li>

						<li class="p-b-10">
							<a href="apps.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Apps for Sale
							</a>
						</li>

						<li class="p-b-10">
							<a href="hosting.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Hosting
							</a>
						</li>

						<li class="p-b-10">
							<a href="webdev.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Web Development
							</a>
						</li>

						<li class="p-b-10">
							<a href="careers.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Careers
							</a>
						</li>
					</ul>
					</center>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-5">
					<center><h4 class="stext-301 cl0 p-b-10" style="color:orange;">
						Help
					</h4></center>

					<center><ul>
						<li class="p-b-10">
	    					<a href="admin_master.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Your Admin Panel
							</a>
						</li>

						<li class="p-b-10">
							<a href="rp.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Refund Policy
							</a>
						</li>

						<li class="p-b-10">
							<a href="support.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Support Services
							</a>
						</li>

						<li class="p-b-10">
							<a href="credits.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Credits
							</a>
						</li>
				</center>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-5">
					<center><h4 class="stext-301 cl0 p-b-10" style="color:orange;">
						INFORMATION
					</h4>
					</center>

				<center><ul>
					<li class="p-b-10">
							<a href="faqs.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Frequently Asked Questions
							</a>
						</li>

						<li class="p-b-10">
							<a href="tc.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Terms and Conditions
							</a>
						</li>

						<li class="p-b-10">
							<a href="privacy-policy.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Privacy Policy
							</a>
						</li>

						<li class="p-b-10">
							<a href="disclaimer.blade.php" class="stext-107 cl7 hov-cl1 trans-04">
								Disclaimer
							</a>
						</li>
					</ul>
				</center>

			</div>

				<div class="col-sm-6 col-lg-3 p-b-5">
					<center><h4 class="stext-301 cl0 p-b-10" style="color:orange;">
						GET IN TOUCH
					</h4>
					</center>

					<center> <p class="stext-107 cl7 size-201">
						Any questions? Let us know @go2domainsales.com
					</p>
					</center>

					<center><div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
					</center>
				</div>

				</div>
			</div>

			<div class="p-t-0">
			<center><p>We accept the following methods of payment:</p></center>
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="PAYPAL">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="VISA">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="MASTERCARD">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="AMEX">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="DISCOVER">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-06.png" alt="BITCOIN">
					</a>
				</div>

				</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
