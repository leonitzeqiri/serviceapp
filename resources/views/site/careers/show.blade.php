@extends('layouts.app')

@section('content')
    <div class="lg:grid lg:grid-cols-2 gap-4 pt-2 space-y-4 md:space-y-0 pb-16 mx-4 py-4">
        <div class="bg-gray-50 border border-gray-200 rounded mt-4 p-6 pt-8">
            <div class="flex">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex  md:w-1/3">
                    <h3 class="text-lg font-bold">{{ $careers->jobtitle }}</h3>
                    <p class="text-sm text-darkGrayishBlue">
                        {{ $careers->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endsection
