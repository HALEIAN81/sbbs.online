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
            {{ __('Go2DomainSales Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="welcome-para p-10 border-b border-gray-200">
                    <p>You're logged in! Welcome to Go2DomainSales!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    <form id="appdom-form" class="domains-table1 card card-body" action="domain/store" enctype="multipart/form-data" method="post">
        @csrf
        <h3>ADD YOUR PREMIUM DOMAINS OR APPS HERE</h3>

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
                <label for="image" class="form-label">Image:</label>
            </div>
            <div class="col-auto">
                <input type="file"  name="image" class="form-control" id="image_id" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Please upload appropriate image to represent your app or domain.</div>
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="name" class="form-label">NAME:</label>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="enter your company name" name="name" class="form-control" id="name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">We'll never share your information with anyone else.</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="domain_name" class="form-label">APP OR DOMAIN NAME:</label>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="enter domain|app name" name="domain_name" class="form-control" id="domain_name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Please place the full name of your app or domain - you may exclude https:// and www.</div>
            </div>
            @error('domain_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="price" class="form-label">PRICE:</label>
            </div>
            <div class="col-auto">
                <input type="number" placeholder="enter price/starting bid" name="price" class="form-control @error('price') is-invalid @enderror " id="price" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Place the entry level price.</div>
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="type" class="form-label">TYPE:</label>
            </div>
            <select  class="choice-type" name="type">
            <option value="DOMAIN">DOMAIN</option>
            <option value="APP">APP</option>
            <option value="BOTH">BOTH</option>
            </select>

            <div class="col-auto">
                <div id="nameHelp" class="form-text">Choose the category of item - Domain, App or Both.</div>
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
