@extends('layouts.main')
@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Account</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-blue-900 flex justify-center items-center h-screen">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">My Account</h2>
                <a href="/profil">
                    <button class="text-gray-700 hover:text-gray-900">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 3a7 7 0 100 14 7 7 0 000-14zM8 10a2 2 0 114 0 2 2 0 01-4 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </a>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold">Username</label>
                    <p class="text-gray-900">sulaeman</p>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Email</label>
                    <p class="text-gray-900">sulaeman4726@gmail.com</p>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Mobile Number</label>
                    <p class="text-gray-900">+62 826 9327 9382</p>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Date Of Birth</label>
                    <p class="text-gray-900">21/03/1995</p>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Password</label>
                    <p class="text-gray-900">********</p>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
