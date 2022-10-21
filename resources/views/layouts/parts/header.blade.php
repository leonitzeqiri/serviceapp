<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">

    <title>Service App</title>
</head>


<body>
    <nav class="relative container mx-auto p-6">
        <div class="flex items-center justify-between">
            <div class="hidden space-x-6 ml-4 md:flex">
                <a href="/" class="hover:text-darkGrayishBlue solid font-bold">Home</a>
                <a href="/about" class="hover:text-darkGrayishBlue solid font-bold">About</a>
                <a href="/contact" class="hover:text-darkGrayishBlue solid font-bold">Contact Us</a>
                <a href="/careers" class="hover:text-darkGrayishBlue solid font-bold">Careers</a>
            </div>

            @auth
                <li class="" style="margin-left:50%;">
                    <span class="font-bold" > Welcome {{ auth()->user()->name }}</span>
                </li>

                <li>
                    <a href="/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
                </li>
                <br><br>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="mr-8">
                        <i class="fa-solid fa-door-closed "></i> Logout
                    </button>
                </form>
            @else
                <a href="/register"
                    class="hidden  ml-3 p-3 px-6 pt-2 text-white bg-veryDarkBlue rounded-full baseline hover:bg-brightRedLight md:block"
                    style="margin-left:60%"><i class="fa-solid fa-user-plus"></i> Register</a>
                <a href="/login"
                    class="hidden ml-4 p-3 px-6 pt-2 text-white bg-veryDarkBlue rounded-full baseline hover:bg-brightRedLight md:block"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            @endauth
        </div>
        <x-flash-message />
    </nav>
