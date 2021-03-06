<!DOCTYPE html>
<html lang="en">
<title>DOMAIN AND APP INVENTORY</title>

<?php
include('frontend/head.php');
?>

<body>

<?php
include('frontend/header.php');
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Title page -->
	<section class="section-a bg-img1 txt-center p-lr-15 p-tb-92" style="background-color:powderblue;">
		<h2 class="ltext-105 cl0 txt-center">
			DOMAIN AND APP INVENTORY
		</h2>
	</section>

    <section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
		<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
			Your Source For Premium Domains And Access To Web Development Services
		</h3>
	</section>

    <center>
        <form class="site-search" action="">
          <input type="text" placeholder="Search Our Premium Domains/Apps Here" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </center>

    <section class="section-a bg-img1 p-lr-15 p-tb-92" style="background-image: url('./images/slide-06.jpg'); opacity:0.8;">
		<h3 class="ltext-102 cl0 txt-center font-weight:bolder" style="color:white; opacity:1.0;">
			Your Source For Premium Domains And Access To Web Development Services
		</h3>
	</section>

    <section>
        <div class="section-inventory p-tb-0" style="background-color:powderblue;">
            <h3>COMPLETE INVENTORY OF DOMAINS AND APPS AVAILABLE</h3>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Domain/App Name</th>
          <th>Price</th>
          <th>Type</th>
          <th>Industry</th>
          <th>Status</th>
          <th>Created</th>
          <th>Details</th>
         </tr>
      </thead>
      <tbody>
        <tr>
          <td>@foreach($domains as $domain)
            <div>{{ $domain->name }}</div>
            @endforeach</td>
          <td class="adname-chart">@foreach($domains as $domain)
            <div>{{ $domain->domain_name }}</div>
            @endforeach</td>
          <td>@foreach($domains as $domain)
            <div>${{  $domain->price }}</div>
            @endforeach</td>
          <td class="type-chart">@foreach($domains as $domain)
            <div>{{  $domain->type }}</div>
            @endforeach</td>
          <td>@foreach($domains as $domain)
            <div>{{  $domain->industry }}</div>
            @endforeach</td>
          <td class="status-chart">@foreach($domains as $domain)
            <div>{{ $domain->status }}</div>
            @endforeach</td>
            <td>@foreach($domains as $domain)
            <div>{{ $domain->created_at }}</div>
            @endforeach</td>
          <td>@foreach($domains as $domain)
            <div><a href="details"><button type="submit" class="table-details" title="Click here for details"><i class="fa fa-bar-chart fa-lg"></i>{{ $domain->updated_at }}</button>
              @endforeach</td></a></div>

        </tr>
      </tbody>
    </table>
    {{ $domains->links() }}
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

































