@extends('layouts.main')
@section('section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Financial Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-blue-900 p-4">
        <!-- Welcome Section -->
        <div class="bg-gray-100 rounded-xl p-6 mb-6">
            <h1 class="text-xl font-bold mb-2">Hi, Welcome Back</h1>
            <div class="flex justify-between mb-4">
                <div class="text-left">
                    <p class="text-gray-700">Total Balance</p>
                    <p class="text-2xl font-semibold">Rp.100.000</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-700">Total Expense</p>
                    <p class="text-2xl font-semibold">-Rp.50.000</p>
                </div>
            </div>
            <div class="bg-green-200 rounded-lg h-2 w-1/2 mb-4"></div>
            <p class="text-gray-700">30% Of Your Expenses, Looks Good.</p>
        </div>

        <!-- My Spending Section -->
        <div class="bg-gray-100 rounded-xl p-6 mb-6">
            <h2 class="text-xl font-bold mb-4">My Spending</h2>
            <div class="grid grid-cols-4 gap-2 text-center text-gray-700">
                <span>Daily</span>
                <span>Weekly</span>
                <span>Monthly</span>
                <span>Yearly</span>
            </div>
            <div class="flex justify-around mt-4 mb-6">
                <div class="w-1/5 bg-black h-24 rounded-lg"></div>
                <div class="w-1/5 bg-green-300 h-32 rounded-lg"></div>
                <div class="w-1/5 bg-black h-20 rounded-lg"></div>
                <div class="w-1/5 bg-green-300 h-28 rounded-lg"></div>
            </div>
            <div class="flex justify-between items-center">
                <p class="text-gray-700">Budget for October</p>
                <p class="text-xl font-semibold">Rp.5,783.00</p>
            </div>
        </div>

        <!-- Transaction Section -->
        <div class="bg-gray-100 rounded-xl p-6 mb-6">
            <h2 class="text-xl font-bold mb-4">Transaction</h2>
            <div class="bg-green-200 p-4 rounded-lg mb-4 text-center">
                <p class="text-gray-700">Total Balance</p>
                <p class="text-2xl font-semibold">Rp.120.000</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg text-center">
                    <p class="text-gray-700">Income</p>
                    <p class="text-xl font-semibold">20.000</p>
                </div>
                <div class="bg-white p-4 rounded-lg text-center">
                    <p class="text-gray-700">Expense</p>
                    <p class="text-xl font-semibold">0</p>
                </div>
            </div>
        </div>

        <!-- Budget Information -->
        <div class="bg-white text-gray-800 p-4 rounded-lg mb-4">
            <h2 class="text-sm font-semibold mb-2">Your Budget</h2>
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center space-x-2">
                    <div class="flex items-center justify-center w-8 h-8 bg-green-300 rounded-full">
                        <svg fill="#000000" width="800px" height="800px" viewBox="0 0 1024 1024"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M879.941 90.236l-53.688 501.453c-.682 6.396-7.192 12.246-13.623 12.246H283.683c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48H812.63c27.367 0 51.449-21.64 54.351-48.854l53.687-501.444c1.204-11.247-6.937-21.34-18.183-22.544s-21.34 6.937-22.544 18.183z" />
                            <path
                                d="M835.011 731.761H327.23c-6.532 0-13.272-5.979-14.052-12.469L237.463 89.95c-1.351-11.23-11.55-19.238-22.78-17.887s-19.238 11.55-17.887 22.78l75.715 629.34c3.254 27.071 27.456 48.539 54.719 48.539h507.781c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48z" />
                            <path
                                d="M216.68 71.68h-93.798c-11.311 0-20.48 9.169-20.48 20.48s9.169 20.48 20.48 20.48h93.798c11.311 0 20.48-9.169 20.48-20.48s-9.169-20.48-20.48-20.48zm204.887 790.78c0-27.478-22.278-49.756-49.756-49.756-27.475 0-49.746 22.275-49.746 49.756s22.27 49.756 49.746 49.756c27.478 0 49.756-22.278 49.756-49.756zm40.96 0c0 50.1-40.616 90.716-90.716 90.716-50.099 0-90.706-40.615-90.706-90.716s40.607-90.716 90.706-90.716c50.1 0 90.716 40.616 90.716 90.716zm352.004 0c0-27.478-22.278-49.756-49.756-49.756-27.475 0-49.746 22.275-49.746 49.756s22.27 49.756 49.746 49.756c27.478 0 49.756-22.278 49.756-49.756zm40.96 0c0 50.1-40.616 90.716-90.716 90.716-50.099 0-90.706-40.615-90.706-90.716s40.607-90.716 90.706-90.716c50.1 0 90.716 40.616 90.716 90.716z" />
                        </svg>
                    </div>
                    <span>Shopping</span>
                </div>
                <span class="font-semibold">Rp.1.000.000</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center space-x-2">
                    <div class="flex items-center justify-center w-8 h-8 bg-green-300 rounded-full">
                        <svg width="800px" height="800px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="iconify iconify--medical-icon" preserveAspectRatio="xMidYMid meet">
                            <path
                                d="M30.456 20.765c0 2.024-1.844 4.19-4.235 4.19v34.164c0 4.851-6.61 4.851-6.61 0V24.955c-2.328 0-4.355-1.793-4.355-4.479V1.674c0-1.636 2.364-1.698 2.364.064v13.898h1.98V1.61c0-1.503 2.278-1.599 2.278.064v13.963h2.046V1.63c0-1.572 2.21-1.635 2.21.062v13.945h2.013V1.63c0-1.556 2.309-1.617 2.309.062v19.074z"
                                fill="#000000"></path>
                            <path
                                d="M48.089 6.045v53.059c0 4.743-6.624 4.673-6.624 0V38.051h-3.526V6.045c0-7.451 10.151-7.451 10.151 0z"
                                fill="#000000"></path>
                        </svg>
                    </div>
                    <span>Restaurant</span>
                </div>
                <span class="font-semibold">Rp.300.500</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center space-x-2">
                    <div class="flex items-center justify-center w-8 h-8 bg-green-300 rounded-full">
                        <svg fill="#000000" width="800px" height="800px" viewBox="0 0 64 64"
                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <g transform="matrix(1,0,0,1,-508,-243.508)">

                                <g id="car-front" transform="matrix(1,0,0,1,174.83,243.508)">

                                    <rect height="64" style="fill:none;" width="64" x="333.17" y="0" />

                                    <g transform="matrix(1,0,0,1,141.17,-320)">

                                        <path
                                            d="M206.495,346.19L207.225,344L206,344C204.895,344 204,343.105 204,342C204,340.895 204.895,340 206,340C207.225,340 208.558,340 208.558,340C208.558,340 209.512,337.138 210.103,335.368C210.375,334.551 211.139,334 212,334C216.667,334 231.333,334 236,334C236.861,334 237.625,334.551 237.897,335.368L239.442,340L242,340C243.105,340 244,340.895 244,342C244,343.105 243.105,344 242,344L240.775,344L241.505,346.19C244.09,346.858 246,349.206 246,352L246,370C246,371.105 245.105,372 244,372C242.778,372 241.222,372 240,372C238.895,372 238,371.105 238,370L238,368L210,368L210,370C210,371.105 209.105,372 208,372C206.778,372 205.222,372 204,372C202.895,372 202,371.105 202,370C202,366.196 202,357.782 202,352C202,349.206 203.91,346.858 206.495,346.19ZM210,354C211.105,354 212,354.895 212,356C212,357.105 211.105,358 210,358C208.255,358 206,358 206,358L206,364L212.764,364C212.764,364 215.114,359.301 216.211,357.106C216.55,356.428 217.242,356 218,356C220.734,356 227.266,356 230,356C230.758,356 231.45,356.428 231.789,357.106C232.886,359.301 235.236,364 235.236,364L242,364L242,358L238,358C236.895,358 236,357.105 236,356C236,354.895 236.895,354 238,354C239.745,354 242,354 242,354L242,352C242,350.895 241.105,350 240,350C233.698,350 214.302,350 208,350C206.895,350 206,350.895 206,352L206,354L210,354ZM228.764,360L219.236,360L217.236,364L230.764,364L228.764,360ZM213.442,338L210.775,346L237.225,346L234.558,338L213.442,338Z" />

                                    </g>

                                </g>

                            </g>

                        </svg>
                    </div>
                    <span>Transport</span>
                </div>
                <span class="font-semibold">Rp.20,118</span>
            </div>
        </div>

        <!-- Navigation Footer -->
        <div class="flex justify-around text-gray-700">
            <button class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M3 6h18M3 18h18" />
                </svg>
                <span class="text-xs">Home</span>
            </button>
            <button class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M3 6h18M3 18h18" />
                </svg>
                <span class="text-xs">Transactions</span>
            </button>
            <button class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M3 6h18M3 18h18" />
                </svg>
                <span class="text-xs">Budget</span>
            </button>
            <a href="/profil">
                <button class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M3 6h18M3 18h18" />
                    </svg>
                    <span class="text-xs">Settings</span>
                </button>
            </a>
        </div>
        </div>
        </div>
    </body>

    </html>
@endsection
