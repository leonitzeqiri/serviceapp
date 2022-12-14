@extends('layouts.app')

@section('content')
    <section id="testimonials">
        @include('layouts._search')
        <!-- Container to heading and testm blocks -->
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center ">
            <!-- Heading -->
            <h2 class="text-4xl font-bold text-center">
                What's Different About Manage?
            </h2>
            <!-- Testimonials Container -->
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                @foreach ($abouts as $about)
                    <!-- Testimonial 1 -->
                    <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex  md:w-1/3">
                        <img src="{{ asset('storage/' . $about->logo) }}" class="w-16 -mt-14" alt="" />
                        <a href="{{ route('about.show', $about->id) }}">
                            <h5 class="text-lg font-bold">{{ $about->name }}</h5>
                            <h1>{{ $about->position->position }}</h1>
                            <p class="text-sm text-darkGrayishBlue">
                                {{ $about->description }}
                            </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="mt-2 py-32">
        {{ $abouts->links() }}
    </div>
@endsection
