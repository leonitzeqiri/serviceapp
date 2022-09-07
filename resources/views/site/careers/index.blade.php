@extends('layouts.app')

<section id="cta" class="bg-brightRed">
    @section('content')
        <div class="container flex flex-col items-center justify-between  mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0"
            style="padding-top:200px">
            <h2 class="text-5xl font-bold ml-96 text-center text-white">
                WORK WITH US REMOTELY OR IN OFFICE
            </h2>

        </div>
    </section>

    <div class="lg:grid lg:grid-cols-2 gap-4 pt-2 space-y-4 md:space-y-0 pb-16 mx-4 py-4">
        <!-- Item 1 -->
        <div class="bg-gray-50 border border-gray-200 rounded mt-4 p-6 pt-8">
            <div class="flex">
                @foreach ($career as $career)
                    <!-- Testimonial 1 -->
                    <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex  md:w-1/3">
                            <a href="{{ route('careers.show', $career->id) }}" class="text-lg font-bold">{{ $career->jobtitle }}</a>
                            <p class="text-sm text-darkGrayishBlue">
                                {{ $career->description }}
                            </p>
                            <a href="#"
                                class="p-3 px-6 pt-2 text-white bg-veryDarkBlue rounded-full baseline hover:bg-veryDarkBlue">
                                Apply Now</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
