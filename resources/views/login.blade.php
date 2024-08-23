@extends('layouts.main')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .card {
        font-family: 'Playfair Display'

    }
</style>
@section('section')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-200 flex justify-center items-center min-h-screen">
        <div class="bg-green-100 rounded-lg shadow-lg p-8 max-w-md w-full">
            <h1 class="text-2xl font-bold text-center mb-6">Create Account</h1>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                    <input
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-indigo-500"
                        id="username" type="text" placeholder="example@example.com">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-indigo-500"
                        id="email" type="email" placeholder="example@example.com">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Mobile Number</label>
                    <input
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-indigo-500"
                        id="phone" type="text" placeholder="+ 123 456 789">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dob">Date Of Birth</label>
                    <input
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-indigo-500"
                        id="dob" type="text" placeholder="DD / MM / YYYY">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-indigo-500"
                        id="password" type="password" placeholder="">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">Confirm
                        Password</label>
                    <input
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-indigo-500"
                        id="confirm_password" type="password" placeholder="">
                </div>
                <div class="flex items-center justify-between">
                    <a href="/homepage">

                        <button
                        class="bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                        type="button" g>
                        Sign Up
                    </button>
                </a>
                </div>
                <p class="text-center text-gray-600 text-xs mt-4">
                    By continuing, you agree to <a href="#" class="text-indigo-600 hover:text-indigo-800">Terms of
                        Use</a> and <a href="#" class="text-indigo-600 hover:text-indigo-800">Privacy Policy</a>.
                </p>
            </form>
        </div>
    </body>
@endsection
