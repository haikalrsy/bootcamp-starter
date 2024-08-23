@extends('layouts.main')

@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-200">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="bg-teal-700 text-white p-4 text-center">
                <h2 class="text-xl font-semibold">Transaction</h2>
                <div class="mt-2">
                    <p class="text-lg">Total Balance</p>
                    <p class="text-3xl font-bold">Rp.120.000</p>
                </div>
                <div class="flex justify-between mt-4">
                    <div class="text-center">
                        <p class="text-sm">Income</p>
                        <p class="text-lg font-semibold">20.000</p>
                    </div>
                    <div class="text-center">
                        <p class="text-sm">Expense</p>
                        <p class="text-lg font-semibold">0</p>
                    </div>
                </div>
            </div>

            <div class="p-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold">April</h3>

                </div>
                <ul class="mt-4 space-y-4">
                    <li class="flex justify-between">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-gray-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M0 0h24v24H0z" stroke="none" />
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M4 8h16M8 4v4M12 4v4M8 12v4M8 16h.01M12 12v4m0 0h4" />
                            </svg>
                            <div>
                                <p class="font-semibold">Salary</p>
                                <p class="text-sm text-gray-500">18:27 - April 30</p>
                            </div>
                        </div>
                        <p class="font-semibold text-teal-700">$4.000,00</p>
                    </li>
                    <li class="flex justify-between">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-gray-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M0 0h24v24H0z" stroke="none" />
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M4 8h16M8 4v4M12 12v4m0 0h4" />
                            </svg>
                            <div>
                                <p class="font-semibold">Others</p>
                                <p class="text-sm text-gray-500">17:00 - April 24</p>
                            </div>
                        </div>
                        <p class="font-semibold text-teal-700">$120,00</p>
                    </li>
                </ul>
            </div>
        </div>
    </body>

    <body class="bg-gray-200">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="bg-teal-700 text-white p-4 text-center">
                <h2 class="text-xl font-semibold">Transaction</h2>
                <div class="mt-2">
                    <p class="text-lg">Total Balance</p>
                    <p class="text-3xl font-bold">Rp.120.000</p>
                </div>
                <div class="flex justify-between mt-4">
                    <div class="text-center">
                        <p class="text-sm">Income</p>
                        <p class="text-lg font-semibold">20.000</p>
                    </div>
                    <div class="text-center">
                        <p class="text-sm">Expense</p>
                        <p class="text-lg font-semibold">0</p>
                    </div>
                </div>
            </div>

            <div class="p-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold">October</h3>

                </div>
                <ul class="mt-4 space-y-4">
                    <li class="flex justify-between">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-gray-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M0 0h24v24H0z" stroke="none" />
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M4 8h16M8 4v4M12 4v4M8 12v4M8 16h.01M12 12v4m0 0h4" />
                            </svg>
                            <div>
                                <p class="font-semibold">Salary</p>
                                <p class="text-sm text-gray-500">18:27 - April 30</p>
                            </div>
                        </div>
                        <p class="font-semibold text-teal-700">$4.000,00</p>
                    </li>
                    <li class="flex justify-between">
                        <div class="flex items-center">
                            <svg class="w-10 h-10 text-gray-500 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path d="M0 0h24v24H0z" stroke="none" />
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M4 8h16M8 4v4M12 12v4m0 0h4" />
                            </svg>
                            <div>
                                <p class="font-semibold">Others</p>
                                <p class="text-sm text-gray-500">17:00 - April 24</p>
                            </div>
                        </div>
                        <p class="font-semibold text-teal-700">$120,00</p>
                    </li>
                </ul>
            </div>
        </div>
    </body>

    </html>
@endsection
