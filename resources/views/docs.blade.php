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
<body id="bg" class="mx-2 md:mx-10 poppins">
    <div class="font-bold text-2xl mt-5 underline">
        Documentation
    </div>
    <div class="border border-black rounded-md mt-5 p-3 bg-red-500 text-white">
        <p class="font-bold my-1">Authorization</p>
        <div class="mt-2">
            To prevent API abuse, for authorization please contact muhamadalghifari97@gmail.com.<br>
            Server available until August 24th, 2022.
        </div>
    </div>
    <div class="border border-black rounded-md mt-5 p-3">
        <p class="font-bold my-1">Provinces</p>
        <p> <span class="bg-green-500 p-1 rounded-md font-bold text-white">POST</span> {{ url('api/provinces') }}</p>
        <div class="mt-2">
            <p>Return :</p>
            <code>{ <br>
               "status": "success", <br>
                "time": "{{\Carbon\Carbon::now('Asia/Jakarta')->toJSON()}}" <br>
                "data": [Object] <br>
                }</code>
        </div>
    </div>
    <div class="border border-black rounded-md mt-5 p-3">
        <p class="font-bold my-1">Cities</p>
        <p> <span class="bg-green-500 p-1 rounded-md font-bold text-white">POST</span> {{ url('api/cities') }}</p>
        <div class="mt-2">
            <p>Body :</p>
            <code>
                province_id = int
            </code>
        </div>
        <div class="mt-2">
            <p>Return :</p>
            <code>{ <br>
                "status": "success", <br>
                "time": "{{\Carbon\Carbon::now('Asia/Jakarta')->toJSON()}}" <br>
                "data": [Object] <br>
                }</code>
        </div>
    </div>
    <div class="border border-black rounded-md mt-5 p-3">
        <p class="font-bold my-1">Districts</p>
        <p> <span class="bg-green-500 p-1 rounded-md font-bold text-white">POST</span> {{ url('api/districts') }}</p>
        <div class="mt-2">
            <p>Body :</p>
            <code>
                city_id = int
            </code>
        </div>
        <div class="mt-2">
            <p>Return :</p>
            <code>{ <br>
                "status": "success", <br>
                "time": "{{\Carbon\Carbon::now('Asia/Jakarta')->toJSON()}}" <br>
                "data": [Object] <br>
                }</code>
        </div>
    </div>
    <div class="border border-black rounded-md mt-5 p-3 mb-5">
        <p class="font-bold my-1">Villages</p>
        <p> <span class="bg-green-500 p-1 rounded-md font-bold text-white">POST</span> {{ url('api/villages') }}</p>
        <div class="mt-2">
            <p>Body :</p>
            <code>
                district_id = int
            </code>
        </div>
        <div class="mt-2">
            <p>Return :</p>
            <code>{ <br>
                "status": "success", <br>
                "time": "{{\Carbon\Carbon::now('Asia/Jakarta')->toJSON()}}" <br>
                "data": [Object] <br>
                }</code>
        </div>
    </div>
    <div class="border border-black rounded-md mt-5 p-3 mb-5">
        <p class="font-bold my-1">Get Spesific Record</p>
        <span class="bg-green-500 p-1 rounded-md font-bold text-white">POST</span>
        <br>
        <br>
        <p>{{ url('api/getProvince') }}</p>
        <p>{{ url('api/getCity') }}</p>
        <p>{{ url('api/getDistrict') }}</p>
        <p>{{ url('api/getVillage') }}</p>
        <div class="mt-2">
            <p>Body :</p>
            <code>
                {subdivision_id} = int
            </code>
        </div>
        <div class="mt-2">
            <p>Return :</p>
            <code>{ <br>
                "status": "success", <br>
                "time": "{{\Carbon\Carbon::now('Asia/Jakarta')->toJSON()}}" <br>
                "data": [Object] <br>
                }</code>
        </div>
    </div>
</body>
</html>
