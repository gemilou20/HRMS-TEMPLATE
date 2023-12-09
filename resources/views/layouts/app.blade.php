<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--FLOWBITE-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('layouts.sidebar') <!--this is your included sidebar on your layouts -->
    <div class="min-h-screen bg-white  w-[calc(100%-250px)] absolute left-[250px] ease-in-out duration-300" id="appMain">
        <div class="bg-gradient-to-t from-white to-[#bba4ac] h-[50vh] w-full absolute"></div>
        @include('layouts.navigation') <!--navigation from layouts -->
        <!-- Page Heading -->
            <header class="shadow">
                <div class="max-w-[100%] relative z-10 mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @yield('header')
                </div>
            </header>


            <!-- Page Content -->
            <main>
                @yield('content') <!--eto yung @section('content') na nilagay nyo every files sa views -->
            </main>
        </div>
        <script>
            //SCRIPT FOR SIDEBAR
            const menuBar = document.getElementById('menubar-main');
            const appMain = document.getElementById('appMain');

            menuBar.addEventListener('click', ()=> {
                appMain.classList.toggle('left-[0.1px]');
                appMain.classList.toggle('w-[calc(100%-0.1px)]');
            });
        </script>

    <!--FLOWBITE SCRIPT-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <!--FLOWBITE CHARTS SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>