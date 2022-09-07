@extends('layouts.app')

@section('content')
    <div class="lg:grid lg:grid-cols-2 gap-4 pt-2 space-y-4 md:space-y-0 pb-16 mx-4 py-4">
        <div class="bg-gray-50 border border-gray-200 rounded mt-4 p-6 pt-8">
            <div class="flex">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex  md:w-1/3">
                    <h3 class="text-lg font-bold">{{ $career->jobtitle }}</h3>
                    <p class="text-sm text-darkGrayishBlue">
                        {{ $career->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('careers.destroy', $career->id) }}">
    @csrf
    @method('DELETE')
    <div class="flex ml-8">
        <a class="px-24 py-2 mt-4 ml-2 text-white bg-blue-900 rounded-lg hover:bg-red-500" href="{{ route('careers.edit', $career->id) }}">Edit</a>
        <button type="submit"
        class="px-24 py-2 mt-4 ml-2 text-white bg-red-900 rounded-lg hover:bg-red-500">Delete</button>
    </div>

    </form>
    @endsection
