<x-app-layout>

    <link rel="stylesheet" type="text/css" href="css/delta.css">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Go2DomainSales Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! Welcome to Go2DomainSales!
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    <form id="appdom-form" class="domains-table1 card card-body" action="domain/store" method="post">
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
                <label for="name" class="form-label">NAME:</label>
            </div>
            <div class="col-auto">
                <input type="text" placeholder="enter your company name" name="name" class="form-control" id="name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <label for="domain_name"> APPNAME :</label> <input type="text" name = "domain_name" placeholder = "enter domain/app name" />
        <label for="price">PRICE :</label> <input type="number" name = "price" placeholder = "enter price/starting bid" /></br>
        <input type="submit" value="SUBMIT" class="btn btn-primary" />
        <h2>WANT TO SPONSOR YOUR APP FOR MORE VIEWS, USE FORM BELOW</h2>
        </div>
    </form>

</div>

</x-app-layout>
