<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <x-app.layout title="Create a ticket">
        <form action="/ticket" method="POST">
            @csrf
            <div class="mb-3">
                <x-input class="form-control" name="phone" label="Phone number" type="tel" />
            </div>
            <div class="mb-3">
                <x-input class="form-control" name="full_name" label="Full name" type="text" />
            </div>
            
            <div class="mb-3">
                <div class="btn-group" name="Demands" role="group" aria-label="Basic checkbox toggle button group">

                    <input type="checkbox" class="btn-check" name="Demands[]" value="روشویی 15 دقیقه = 25000 تومان" id="Demands1" autocomplete="off">

                    <label class="btn btn-outline-primary" for="Demands1">روشویی 15 دقیقه = 25000 تومان</label>


                    <input type="checkbox" class="btn-check" name="Demands[]" value="نظافت داخل 20 دقیقه = 30000 تومان" id="Demands2" autocomplete="off">

                    <label class="btn btn-outline-primary" for="Demands2">نظافت داخل 20 دقیقه = 30000 تومان</label>


                    <input type="checkbox" class="btn-check" name="Demands[]" value="صفر شویی 60 دقیقه = 80000 هزار تومان" id="Demands3" autocomplete="off">

                    <label class="btn btn-outline-primary" for="Demands3">صفر شویی 60 دقیقه = 80000 هزار تومان</label>
                </div>
            </div>

            <div class="mb-3">
                <x-input class="form-control" name="time_of_arrival" label="Time of arrival" type="datetime-local"
                    min="09:00:00" max="21:00:00" />
            </div>
            <x-submit class="btn btn-primary">Wash my car</x-submit>

        </form>
        @if ($errors->any())

            <div class="alert alert-danger mt-4">

                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif
    </x-app.layout>
