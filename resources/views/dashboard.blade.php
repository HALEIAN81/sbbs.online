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
                <label for="image" class="form-label">Image:</label>
            </div>
            <div class="col-auto">
            <input type="text" placeholder="add an image" name="name" class="form-control" id="image" />
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
                <input type="text" placeholder="enter domain/app name" name="domain_name" class="form-control" id="domain_name" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Please place the full name of your app or domain - you may exclude https:// and www.</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="price" class="form-label">PRICE:</label>
            </div>
            <div class="col-auto">
                <input type="number" placeholder="enter price/starting bid" name="price" class="form-control" id="price" aria-describedby="nameHelp" />
            </div>
            <div class="col-auto">
                <div id="nameHelp" class="form-text">Place the entry level price.</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="col-auto">
                <label for="type" class="form-label">TYPE:</label>
            </div>
            <input list="type" name="type" class="form-control" id="type">
            <select  class="choice-type">
            <option value="DOMAIN">DOMAIN</option>
            <option value="APP">APP</option>
            <option value="both">BOTH</option>
            </select>

            <div class="col-auto">
                <div id="nameHelp" class="form-text">Choose the category of item - Domain, App or Both.</div>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="SUBMIT" class="btn-addad btn-primary" />
        <h2 class="sponsor-call">WANT TO SPONSOR YOUR APP FOR MORE VIEWS, USE FORM BELOW</h2>
        </div>
    </form>

</div>

</x-app-layout>
