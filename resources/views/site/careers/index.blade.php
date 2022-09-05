@extends('layouts.app')

<section id="cta" class="bg-brightRed">
    @section('content')
        <div
            class="container flex flex-col items-center justify-between  mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0" style="padding-top:200px">
                <h2 class="text-5xl font-bold ml-96 text-center text-white">
                    WORK WITH US REMOTELY OR IN OFFICE
                </h2>

        </div>
    </section>


    <div class="lg:grid lg:grid-cols-2 gap-4 pt-4 space-y-4 md:space-y-0 mx-4 py-4">
        <!-- Item 1 -->
        <div class="bg-gray-50 border border-gray-200 rounded mt-4 p-6">
            <div class="flex">
                <div>
                    @foreach ($careers as $career)
                    <div class="text-2xl font-bold mb-4 py-4 ">{{ $career->jobtitle }}Testing</div>
                    <p class="max-w-sm text-center text-darkGrayishBlue mb-8 md:text-left">
                        {{ $career->description }}
                    </p>
                </div>
                @endforeach
            </div>
            <a href="#"
            class="p-3 px-6 pt-2 text-white bg-veryDarkBlue rounded-full baseline hover:bg-veryDarkBlue"> Apply Now</a>
        </div>


    @endsection
