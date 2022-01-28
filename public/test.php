
<section>
    <div class="w3-container p-tb-0" style="background-color:powderblue;">
        <h2>PREMIUM DOMAINS AND APPS MARKET</h2>
        <div class="row">

            @foreach($domains as $domain)
                <div class="col-md-3">

                <div class="card bg-white">
                    <img src="{{ asset('storage/' . $domain->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $domain->domain_name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <a href="inventory_table.blade.php">{{  $domain->fullName() }}</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
