@extends('layouts.main')
@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction Input</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-white text-white">

        <!-- Header -->
        <div class="flex justify-between items-center bg-white p-4">
            <button class="text-2xl">&times;</button>
            <div class="flex space-x-4">
                <button class="py-2 px-4 bg-blue-900 rounded text-white">Income</button>
                <button class="py-2 px-4 bg-teal-600 rounded text-white">Expense</button>
            </div>
            <button class="text-2xl">&check;</button>
        </div>

        <!-- Balance and Details -->
        <div class="bg-white p-6 text-center">
            <div class="text-2xl font-bold">- 50.000 IDR</div>
            <div class="flex justify-between mt-4 text-sm">
                <div>
                    <p>Account</p>
                    <p class="font-semibold">CASH</p>
                </div>
                <div>
                    <p>Category</p>
                    <p class="font-semibold">GROCERIES</p>
                </div>
            </div>
        </div>

        <!-- Calculator -->
        <div class="bg-green-300 text-black rounded-t-3xl p-4 mt-6">
            <div class="text-center text-teal-700 font-semibold mb-4">Number</div>
            <div class="grid grid-cols-4 gap-4 text-2xl font-bold">
                <button class="py-4">7</button>
                <button class="py-4">8</button>
                <button class="py-4">9</button>
                <button class="py-4 text-gray-400">÷</button>
                <button class="py-4">4</button>
                <button class="py-4">5</button>
                <button class="py-4">6</button>
                <button class="py-4 text-gray-400">*</button>
                <button class="py-4">1</button>
                <button class="py-4">2</button>
                <button class="py-4">3</button>
                <button class="py-4 text-gray-400">-</button>
                <button class="py-4">,</button>
                <button class="py-4">0</button>
                <button class="py-4">→</button>
                <button class="py-4 text-gray-400">+</button>
            </div>
        </div>

    </body>

    </html>
@endsection
