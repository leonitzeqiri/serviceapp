@extends('layouts.app')

@section('content')

    <form action="/users" method="POST">
        @csrf
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">

                <h3 class="text-2xl font-bold text-center">Join us</h3>
                    <div class="mt-4">
                        <div>
                            <label class="block" for="Name">Name<label>
                            <input type="text" placeholder="Name" name="name"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>

                        <div class="mt-4">
                            <label class="block" for="email">Email<label>
                                    <input type="text" placeholder="Email" name="email"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>

                        <div class="mt-4">
                            <label class="block">Password<label>
                                    <input type="password" placeholder="Password" name="password"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>

                        <div class="mt-4">
                            <label class="block">Confirm Password<label>
                                <input type="password" placeholder="Password" name="password_confirmation"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>

                        <div class="flex">
                            <button
                                class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Create
                                Account</button>
                        </div>
                        <div class="mt-6 text-grey-dark">
                            Already have an account?
                            <a class="text-blue-600 hover:underline" href="/login">
                                Log in
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </form>
@endsection
