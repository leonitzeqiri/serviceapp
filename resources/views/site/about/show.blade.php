@extends('layouts.app')

@section('content')

<div class="flex flex-col mt-24 ml-8 md:flex-row md:space-x-6">
    <!-- Testimonial 1 -->
    <div
      class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3"
    >
    <img src="{{ asset('storage/' . $about->logo) }}" class="w-16 -mt-14" alt="" />
    <a href="{{ route('about.show', $about->id) }}">
      <h5 class="text-lg font-bold">{{ $about->name }}</h5>
         <h1>{{ $about->position->position }}</h1>
      <p class="text-sm text-darkGrayishBlue">
       {{ $about->description }}
      </p>
    </div>
</div>
<form method="POST" action="{{ route('about.destroy', $about->id) }}">
    @csrf

    @method('DELETE')
    <div class="flex ml-8">
        <a class="px-24 py-2 mt-4 ml-2 text-white bg-blue-900 rounded-lg hover:bg-red-500" href="{{ route('about.edit', $about->id) }}">Edit</a>
        <button type="submit"
            class="px-24 py-2 mt-4 ml-2 text-white bg-red-900 rounded-lg hover:bg-red-500">Delete</button>
    </div>

@endsection
