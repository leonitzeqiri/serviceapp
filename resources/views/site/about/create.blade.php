@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
        @csrf



        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                File Upload
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" name="logo" type="file">
            @error('logo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" name="name" type="text">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide     text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Description
            </label>
            <select
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="position_id" name="position_id">
                @foreach ($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->position }}</option>
                @endforeach
                @error('position_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </select>
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
                <a href="/" class="px-24 py-2 mt-4 ml-2  text-white bg-red-900 rounded-lg hover:bg-red-500"> Back </a>
            </div>
    </form>
@endsection
