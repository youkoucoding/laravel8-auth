<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel8-authentication-demo</title>
</head>
<body>
<header
    style="background-image: url('https://images.unsplash.com/photo-1590523277543-a94d2e4eb00b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=3578&q=80')"
    class="relative bg-no-repeat bg-cover lg:bg-center p-6 bg-top-right"
>
    <a href="/">
        <h1>
            <span class="sr-only">AirBnb</span>
            <svg
                viewBox="0 0 1000 1000"
                role="presentation"
                aria-hidden="true"
                focusable="false"
                style="height: 32px; width: 32px; display: block; fill: #ffffff"
            >
                <title>AirBnb</title>
                <path
                    d="m499.3 736.7c-51-64-81-120.1-91-168.1-10-39-6-70 11-93 18-27 45-40 80-40s62 13 80 40c17 23 21 54 11 93-11 49-41 105-91 168.1zm362.2 43c-7 47-39 86-83 105-85 37-169.1-22-241.1-102 119.1-149.1 141.1-265.1 90-340.2-30-43-73-64-128.1-64-111 0-172.1 94-148.1 203.1 14 59 51 126.1 110 201.1-37 41-72 70-103 88-24 13-47 21-69 23-101 15-180.1-83-144.1-184.1 5-13 15-37 32-74l1-2c55-120.1 122.1-256.1 199.1-407.2l2-5 22-42c17-31 24-45 51-62 13-8 29-12 47-12 36 0 64 21 76 38 6 9 13 21 22 36l21 41 3 6c77 151.1 144.1 287.1 199.1 407.2l1 1 20 46 12 29c9.2 23.1 11.2 46.1 8.2 70.1zm46-90.1c-7-22-19-48-34-79v-1c-71-151.1-137.1-287.1-200.1-409.2l-4-6c-45-92-77-147.1-170.1-147.1-92 0-131.1 64-171.1 147.1l-3 6c-63 122.1-129.1 258.1-200.1 409.2v2l-21 46c-8 19-12 29-13 32-51 140.1 54 263.1 181.1 263.1 1 0 5 0 10-1h14c66-8 134.1-50 203.1-125.1 69 75 137.1 117.1 203.1 125.1h14c5 1 9 1 10 1 127.1.1 232.1-123 181.1-263.1z"
                ></path>
            </svg>
        </h1>
    </a>

{{--    <div class="max-w-5xl mx-auto lg:py-32 py-2">--}}
{{--        <h2 class="lg:text-5xl text-4xl font-semibold text-white">--}}
{{--            Book a trip. Host travals. All on Airbnb.--}}
{{--        </h2>--}}
{{--        <div--}}
{{--            class="flex items-center flex-wrap justiy-start max-w-2xl lg:mx-0 mx-auto"--}}
{{--        >--}}
{{--            <div class="lg:pr-5 w-full lg:w-1/2 mb-4 lg:mb-0">--}}
{{--                <p class="text-white mb-2 tracking-wide">--}}
{{--                    Find places to stay and things to do.--}}
{{--                </p>--}}
{{--                <a--}}
{{--                    href="#"--}}
{{--                    class="transition bg-white px-10 py-3 rounded font-bold hover:bg-gray-300 block w-full text-center border-2 border-white"--}}
{{--                >Explore</a--}}
{{--                >--}}
{{--            </div>--}}
{{--            <div class="lg:pl-5 w-full lg:w-1/2">--}}
{{--                <p class="text-white mb-2 tracking-wide">--}}
{{--                    Earn money from your extra space.--}}
{{--                </p>--}}
{{--                <a--}}
{{--                    href="#"--}}
{{--                    class="transition bg-transparent px-10 py-3 rounded font-bold hover:bg-gray-300 block w-full text-center text-white hover:text-gray-800 border-2 border-white"--}}
{{--                >Host</a--}}
{{--                >--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</header>

{{--<nav class='flex justify-between items-center h-16 font-mono bg-gradient-to-r from-yellow-300 via-red-300 to-yellow-600 font-bold relative text-gray-900' role='navigation'>--}}
{{--    <a href="/" class='pl-8'>Navbar</a>--}}
{{--    <div class='px-4 cursor-pointer md:hidden'>--}}
{{--        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>--}}
{{--        </svg>--}}
{{--    </div>--}}
{{--    <div class="pr-8 md:block hidden">--}}
{{--        <a href="{{URL("/")}}" class='p-4'>Home</a>--}}
{{--        <a href="{{URL("/")}}" class='p-4'>Menu</a>--}}
{{--        <a href="{{URL("/")}}" class='p-4'>About</a>--}}
{{--        <a href="{{URL("/")}}" class='p-4'>Contact</a>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--template inhertence--}}
<div class="mb-0 pb-0">
    @yield("dynamic_content")
</div>
</body>
</html>
