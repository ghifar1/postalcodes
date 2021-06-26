<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        .poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="mx-5">
    <div class="flex flex-wrap justify-center items-center" style="height: 300px;">
        <div>
            <p class="poppins text-4xl font-semibold">API Postal Codes Indonesia</p>
            <p class="mt-2 md:text-center font-semibold">Created by Ghifari</p>
            <p class="md:text-center font-semibold">Data by <a href="https://github.com/ArrayAccess/Indonesia-Postal-And-Area" class="underline">ArrayAccess</a></p>
        </div>
    </div>
    <div class="flex flex-wrap justify-center">
        <div>
            <a class="border-2 rounded-md px-2 py-1 border-black hover:bg-black hover:text-white" href="{{ url('docs') }}">Documentation</a>
        </div>
    </div>
</body>
</html>
