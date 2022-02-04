<div class="sidenav">
    <a href="about.blade.php">About</a>
    <a href="webdev.blade.php">Services</a>
    <a href="support.blade.php">Support</a>
    <a href="contact.blade.php">Contact</a>
    <a href="hosting.blade.php">Hosting</a>
    <a href="careers.blade.php">Careers</a>
    <a href="faqs.blade.php">FAQS</a>
    <a href="index.php">Home</a>
  </div>

<link rel="stylesheet" type="text/css" href="/css/delta.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="header-dashboard font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Advanced Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="welcome-para p-10 border-b border-gray-200">
                    <p>Add more details to your listing here!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    <form id="appdom-form" class="domains-table2 card card-body" action="domain/store" enctype="multipart/form-data" method="post">
        @csrf
        <h3>FILL OUT ADVANCED DETAILS BELOW</h3>

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif


        <div class="mb-3">
            <div class="col-auto">
                <label for="description" class="form-label">DESCRIPTION</label>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="enter a brief description of your domain|app" name="description" class="form-control" id="name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">We'll never share your information with anyone else. |Limit is 300 char|</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="info1" class="form-label">INFO1</label>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="enter unit features" name="info1" class="form-control" id="name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Describe the features of your domain|app. |Limit is 300 char|</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="info2" class="form-label">INFO2</label>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="enter development process" name="info2" class="form-control" id="name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Describe the development process of your domain|app. |Limit is 300 char|</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="info3" class="form-label">INFO3</label>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="enter use description" name="info3" class="form-control" id="name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Describe the potential uses for your domain|app. |Limit is 300 char|</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="unit_age" class="form-label">AGE OF DOMAIN OR APP(UNIT AGE IN YEARS)</label>
            </div>
            <div class="col-auto">
                <input type="number" placeholder="enter age of domain|app" name="unit_age" class="form-control @error('price') is-invalid @enderror " id="price" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Place the estimated age of domain|app.</div>
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="status" class="form-label">STATUS:</label>
            </div>
            <select  class="choice-type" name="status">
            <option value="AVAILABLE">AVAILABLE</option>
            <option value="PENDING SALE">PENDING SALE</option>
            <option value="BIDDING">BIDDING</option>
            <option value="SOLD">SOLD!!!</option>
            </select>

            <div class="col-auto">
                <div id="nameHelp" class="form-text">Choose the current status of the domain|app.</div>
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="industry" class="form-label">INDUSTRY:</label>
            </div>
            <select  class="choice-type" name="industry">
            <option value="HEALTHCARE">HEALTHCARE</option>
            <option value="SERVICE">SERVICE</option>
            <option value="ECOMMERCE">ECOMMERCE</option>
            <option value="DROPSHIPPING">DROPSHIP</option>
            <option value="SAAS">SAAS</option>
            <option value="MARKETING">MARKETING</option>
            <option value="FARMING">FARMING</option>
            <option value="EDUCATION">EDUCATION</option>
            <option value="FOOD">FOOD</option>
            </select>

            <div class="col-auto">
                <div id="nameHelp" class="form-text">Choose the current industry for the domain|app.</div>
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="SUBMIT" class="btn-addad btn-primary" />
        <h2 class="sponsor-call">WANT TO SPONSOR YOUR APP FOR MORE VIEWS, USE FORM BELOW</h2>
        </div>
    </form>

</div>
</x-app-layout>
