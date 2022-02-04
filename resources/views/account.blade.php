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
            {{ __('User Account Dashboard') }}
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
        <h2 class="account-action">ADD MORE INFORMATION FOR YOUR DOMAIN|APP DETAILS BELOW</h2>

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
        </div>
    </form>

    @foreach($domains as $domain)

    <div class="container-account">

        <div>
        <a href="advanced/{{ $domain->id }}">{{  $domain->name }}</a>
        </div>
    </div>
    @endforeach

    {{ $domains->links() }}


</div>
</x-app-layout>
