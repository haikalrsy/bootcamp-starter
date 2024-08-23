@extends('layouts.main')
@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-slate-800 text-white">
        <!-- Container -->
        <div class="max-w-md mx-auto p-4">
            <!-- Header -->
            <div class="bg-slate-700 p-4 rounded-lg text-center">
                <h1 class="text-xl font-bold">Transaction</h1>
                <div class="mt-4">
                    <h2 class="text-lg font-semibold">Total Balance</h2>
                    <p class="text-2xl font-bold text-green-400">Rp.70.000</p>
                </div>
            </div>

            <!-- Income and Expense -->
            <div class="flex justify-between mt-6">
                <div class="w-1/2 text-center">
                    <p class="font-semibold">Income</p>
                    <p class="text-xl font-bold">0</p>
                </div>
                <div class="w-1/2 text-center">
                    <p class="font-semibold">Expense</p>
                    <p class="text-xl font-bold">50.000</p>
                </div>
            </div>

            <!-- Transaction List -->
            <div class="mt-6 space-y-4">
                <!-- April -->
                <div>
                    <h3 class="font-semibold">April</h3>
                    <!-- Groceries -->
                    <div class="flex justify-between items-center mt-2">
                        <div class="flex items-center space-x-4">
                            <div class="bg-teal-500 p-2 rounded-full">
                                <!-- Icon placeholder -->
                            </div>
                            <div>
                                <p class="font-semibold">Groceries</p>
                                <p class="text-sm text-gray-400">17:00 - April 24</p>
                            </div>
                        </div>
                        <p class="text-red-400 font-bold">-$100,00</p>
                    </div>
                    <!-- Rent -->
                    <div class="flex justify-between items-center mt-2">
                        <div class="flex items-center space-x-4">
                            <div class="bg-purple-800 p-2 rounded-full">
                                <!-- Icon placeholder -->
                            </div>
                            <div>
                                <p class="font-semibold">Rent</p>
                                <p class="text-sm text-gray-400">8:30 - April 15</p>
                            </div>
                        </div>
                        <p class="text-red-400 font-bold">-$674,40</p>
                    </div>
                    <!-- Transport -->
                    <div class="flex justify-between items-center mt-2">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-500 p-2 rounded-full">
                                <!-- Icon placeholder -->

                            </div>
                            <div>
                                <p class="font-semibold">Transport</p>
                                <p class="text-sm text-gray-400">7:30 - April 08</p>
                            </div>
                        </div>
                        <p class="text-red-400 font-bold">-$4,13</p>
                    </div>
                </div>

                <!-- March -->
                <div>
                    <h3 class="font-semibold">March</h3>
                    <!-- Food -->
                    <div class="flex justify-between items-center mt-2">
                        <div class="flex items-center space-x-4">
                            <div class="bg-purple-800 p-2 rounded-full">
                                <!-- Icon placeholder -->
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7h18M9 3v4m6-4v4m-7 8h8l1 9H5l1-9zm9-4h2v4h-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold">Food</p>
                                <p class="text-sm text-gray-400">19:30 - March 31</p>
                            </div>
                        </div>
                        <p class="text-red-400 font-bold">-$70,40</p>
                    </div>
                    <!-- Rent -->
                    <div class="flex justify-between items-center mt-2">
                        <div class="flex items-center space-x-4">
                            <div class="bg-purple-800 p-2 rounded-full">
                                <!-- Icon placeholder -->
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7h18M9 3v4m6-4v4m-7 8h8l1 9H5l1-9zm9-4h2v4h-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold">Rent</p>
                                <p class="text-sm text-gray-400">18:39 - March 31</p>
                            </div>
                        </div>
                        <p class="text-red-400 font-bold">-$674,40</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
