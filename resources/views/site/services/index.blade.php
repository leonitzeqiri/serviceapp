@extends('layouts.app')

@section('content')

    @unless(count($services) == 0)
        @foreach ($services as $service)
            <main class="bg-brightWhite mx-auto space-y-12 md:py-0 md:flex-row md:space-y-0" style="text-align: center;">
                <h1 class="max-w-md  text-4xl py-8  font-bold" style="margin-left:20px;">
                    <a href="/services/{{ $service->id }}">{{ $service->title }}</a>
                </h1>

                <a class="fa-solid fa-arrow/-right-to-bracket solid font-bold py-2"style="margin-left:83%;" href="/contact"> Build with
                    US!
                </a>

                <div class="container flex flex-col w-full h-full py-4  md:flex-row md:space-y-0">
                    <div class="mx-8">
                        <img src="{{ asset('storage/' . $service->logo) }}" alt="" />
                    </div>
                </main>
            @endforeach
            <x-flash-message />
            @else
            <p class="bg-brightWhite mx-auto space-y-12 md:py-0 md:flex-row md:space-y-0" style="text-align: center;">No Services
            </p>
            @endunless

            <div class="mt-6 p-4">
                {{ $services->links() }}
            </div>


            <section id="cta" class="bg-brightRed">
        <div
            class="container flex flex-col items-center justify-between  mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0"style="padding-top:200px">
            <div class="flex flex-col mb-32  ml-8 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-2xl md:text-left">
                    Bring everyone together to build better products
                </h1>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                    Manage makes it simple for software teams to plan day-to-day tasks
                    while keeping the larger team goals in view.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="#"
                        class="p-3 px-6 pt-2 text-white bg-veryDarkBlue rounded-full baseline hover:bg-veryDarkBlue">Get
                        Started</a>
                </div>
            </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="images/illustration-intro.svg" alt="" />
            </div>
        </div>

    </section>

@endsection
