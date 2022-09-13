@extends('layouts.app')

@section('content')

<a href="/" class="inline-block text-black ml-8 mb-2 mt-8"><i class="fa-solid fa-arrow-left"></i> Back
</a>
    <main class="bg-brightWhite mx-auto space-y-12 md:py-0 md:flex-row md:space-y-0" style="text-align: center;">
        <h1 class="max-w-md  text-4xl py-8  font-bold" style="margin-left:20px;">
            {{ $service->title }}
        </h1>

        <div class="container flex flex-col items-center  md:flex-row md:space-y-0">
            <div class="mx-8">
                <img src="{{ asset('storage/' . $service->logo) }}" alt="" />
            </div>

        </main>


        <form method="POST" action="/services/{{ $service->id }}" class="mb-96 ml-4">
            @csrf

            @method('DELETE')
            <div class="flex">
                <a
                class="px-24 py-2 mt-4 ml-2 text-white bg-blue-900 rounded-lg hover:bg-red-500" href="/services/{{ $service->id }}/edit">Edit</a>
                <button type="submit"
                    class="px-24 py-2 mt-4 ml-2 text-white bg-red-900 rounded-lg hover:bg-red-500">Delete</button>
            </div>
        </form>



@endsection
