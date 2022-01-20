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

    <center><form class="domains-table" action="insert.php" method="post">
        <h3>ADD YOUR PREMIUM DOMAINS OR APPS HERE</h3>
        ENTRY1: <input type="text" name = "field1" placeholder = "enter domain or app name" /><br/>
        ENTRY2: <input type="text" name = "field2" placeholder = "enter domain or app name" /><br/>
        ENTRY3: <input type="text" name = "field3" placeholder = "enter domain or app name" /><br/>
        ENTRY4: <input type="text" name = "field4" placeholder = "enter domain or app name" /><br/>
        ENTRY5: <input type="text" name = "field5" placeholder = "enter domain or app name" /><br/>
        <input type="submit" />
    </form>
    </center>

</x-app-layout>
