{{-- <x-app.layout title="Welcome">
    <h1>
        Welcome to Carwash
    </h1>
    <x-link class="border border-green-700 bg-green-900 text-white rounded-lg px-3" href="/ticket/create">
        Create a ticket
    </x-link>
    <x-link class="mx-3 border border-purple-700 bg-purple-900 text-white rounded-lg px-3" href="/tracking">
        Track your ticket
    </x-link>
</x-app.layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-image: url("images/Prestigue-car-wash.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }

        .centered-text {
            margin: 0% auto;
            text-align: center;
            border: 1px solid rgb(2, 10, 133);
            background-color: rgb(0, 4, 255);
            opacity: 0.6;
            max-width: 50%;
            color: aliceblue;
        }

        button {
            margin-left: 300px;
            margin-top: 300px;

            text-align: center;
            border: 1px solid rgba(133, 2, 2, 0.301);
            background-color: rgb(255, 0, 0);
            color: aliceblue;
            font-size: 40px;

        }
    </style>
</head>


    <body>
        <h1 class="centered-text" align="center">
            به سیستم مدیریت کارواش خوش آمدید
        </h1>
        <button>
            <x-link href="/ticket/create">
                Create a ticket
            </x-link>
        </button>
        <button>
            <x-link href="/tracking">
                Track your ticket
            </x-link>
        </button>


    </body>


</html>
