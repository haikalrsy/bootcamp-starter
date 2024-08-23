@extends('layouts.main')

@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-green-600 flex justify-center items-center h-screen">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg w-full max-w-md text-center">
            <div class="mb-6">
                <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="User Profile Picture">
                <h2 class="text-xl font-bold mt-4">User</h2>
                <p class="text-gray-600">+62 826 9327 9382</p>
            </div>
            <div class="space-y-4">
                <a href="#"
                    class="block bg-white p-4 rounded-lg shadow-md text-gray-700 font-semibold flex items-center justify-between">
                    <span>My Account</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 01-.293-.707v-8a1 1 0 012 0v7.586l2.707-2.707a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#"
                    class="block bg-white p-4 rounded-lg shadow-md text-gray-700 font-semibold flex items-center justify-between">
                    <span>Security</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 01-.293-.707v-8a1 1 0 012 0v7.586l2.707-2.707a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#"
                    class="block bg-white p-4 rounded-lg shadow-md text-gray-700 font-semibold flex items-center justify-between">
                    <span>Categories</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 01-.293-.707v-8a1 1 0 012 0v7.586l2.707-2.707a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#"
                    class="block bg-white p-4 rounded-lg shadow-md text-gray-700 font-semibold flex items-center justify-between">
                    <span>Notifications</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 01-.293-.707v-8a1 1 0 012 0v7.586l2.707-2.707a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#"
                    class="block bg-white p-4 rounded-lg shadow-md text-gray-700 font-semibold flex items-center justify-between">
                    <span>Logout</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 01-.293-.707v-8a1 1 0 012 0v7.586l2.707-2.707a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </body>

    </html>
@endsection
