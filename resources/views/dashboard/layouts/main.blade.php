<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar[data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

</head>

<body class="font-poppins antialiased">

    <div id="view" class="h-full w-screen flex flex-row" x-data="{ sidenav: true }">
        <button @click="sidenav = true"
            class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-teal-500 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden">
        </button>
        @include('dashboard.layouts.sidebar')

        <main>
            <div class="ml-20 mt-24">
                @yield('container')
            </div>
        </main>
    </div>
</body>

</html>
