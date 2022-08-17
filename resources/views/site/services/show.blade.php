@extends('layouts.app')

@section('content')


    <main class="bg-brightWhite mx-auto space-y-12 md:py-0 md:flex-row md:space-y-0" style="text-align: center;">
        <h1 class="max-w-md  text-4xl py-8  font-bold" style="margin-left:20px;">
            {{ $service->title }}
        </h1>

        <div class="container flex flex-col items-center  md:flex-row md:space-y-0">
            <div class="mx-8">
                <img src="{{ asset('storage/' . $service->logo) }}" alt="" />
            </div>

            <form method="POST" action="/services/{{ $service->id }}">
                @csrf

                @method('DELETE')
                <div class="flex">
                    <button type="submit"
                        class="px-24 py-2 mt-4 ml-2 text-white bg-blue-900 rounded-lg hover:bg-red-500">Delete</button>
                </div>
            </form>
        </main>



@endsection
