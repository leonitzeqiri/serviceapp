@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('careers.update', $career->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf



        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                JobTitle
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" name="jobtitle" type="text">
            @error('jobtitle')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>


        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide     text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Description
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" name="description" type="text">
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <div class="flex">
                <button type="submit"
                    class="px-24 py-2 mt-4 ml-2 text-white bg-blue-900 rounded-lg hover:bg-red-500">Add</button>
            </div>
            <div class="flex">
                <a href="/careers" class="px-24 py-2 mt-4 ml-2  text-white bg-red-900 rounded-lg hover:bg-red-500"> Back </a>
            </div>
    </form>
@endsection
