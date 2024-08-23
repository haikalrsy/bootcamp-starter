@extends('layouts.main')

@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-gray-100">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-2xl shadow-md">
            <div class="p-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-semibold">Transaction</h1>
                    <div class="text-gray-500">Total Balance</div>
                </div>
                <div class="text-center my-4">
                    <div class="text-3xl font-bold">Rp.120.000</div>
                </div>
                <div class="flex justify-around my-4">
                    <div class="text-center">
                        <div class="text-sm text-gray-500">Income</div>
                        <div class="text-lg font-semibold text-green-600">20.000</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm text-gray-500">Expense</div>
                        <div class="text-lg font-semibold text-red-600">0</div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="text-gray-600 mb-2">April</div>
                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 bg-green-300 rounded-lg shadow">
                        <div>
                            <div class="text-sm font-semibold text-gray-700">Salary</div>
                            <div class="text-sm text-gray-500">Monthly</div>
                        </div>
                        <div class="text-sm text-right">
                            <div class="text-gray-600">18:27 - April 30</div>
                            <div class="text-lg font-semibold text-gray-700">$4.000,00</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-green-300 rounded-lg shadow">
                        <div>
                            <div class="text-sm font-semibold text-gray-700">Others</div>
                            <div class="text-sm text-gray-500">Payments</div>
                        </div>
                        <div class="text-sm text-right">
                            <div class="text-gray-600">17:00 - April 24</div>
                            <div class="text-lg font-semibold text-gray-700">$120,00</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat for other months -->
        </div>
    </body>

    </html>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-gray-100">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-2xl shadow-md">
            <div class="p-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-semibold">Transaction</h1>
                    <div class="text-gray-500">Total Balance</div>
                </div>
                <div class="text-center my-4">
                    <div class="text-3xl font-bold">Rp.120.000</div>
                </div>
                <div class="flex justify-around my-4">
                    <div class="text-center">
                        <div class="text-sm text-gray-500">Income</div>
                        <div class="text-lg font-semibold text-green-600">20.000</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm text-gray-500">Expense</div>
                        <div class="text-lg font-semibold text-red-600">0</div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="text-gray-600 mb-2">May</div>
                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 bg-green-300 rounded-lg shadow">
                        <div>
                            <div class="text-sm font-semibold text-gray-700">Salary</div>
                            <div class="text-sm text-gray-500">Monthly</div>
                        </div>
                        <div class="text-sm text-right">
                            <div class="text-gray-600">18:27 - May 30</div>
                            <div class="text-lg font-semibold text-gray-700">$4.000,00</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-green-300 rounded-lg shadow">
                        <div>
                            <div class="text-sm font-semibold text-gray-700">Others</div>
                            <div class="text-sm text-gray-500">Payments</div>
                        </div>
                        <div class="text-sm text-right">
                            <div class="text-gray-600">17:00 - May 24</div>
                            <div class="text-lg font-semibold text-gray-700">$120,00</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat for other months -->
        </div>
    </body>
@endsection
