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

    <center><form id="appdom-form" class="domains-table" action="insert.php" method="post">
        <h3>ADD YOUR PREMIUM DOMAINS OR APPS HERE</h3>
        <label for="id"> ID :</label><input type="number" name = "field1" placeholder = "UNIT ID" />
        <label for="name"> NAME :</label> <input type="text" name = "field2" placeholder = "enter your name/company name" />
        <label for="domain_name"> APPNAME :</label> <input type="text" name = "field3" placeholder = "enter domain or app name" />
        <label for="price">PRICE :</label> <input type="number" name = "field4" placeholder = "enter price/starting bid" /></br>
        <input type="submit" value="SUBMIT" />
        <h2>WANT TO SPONSOR YOUR APP FOR MORE VIEWS, USE FORM BELOW</h2>
        </div>
    </form>
    </center>

</x-app-layout>
