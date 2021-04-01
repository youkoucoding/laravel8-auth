<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <title>Airbnb Tailwind Laravel 8</title>
</head>
<body class="antialiased text-gray-800">
<header
    style="background-image: url('https://images.unsplash.com/photo-1542640244-7e672d6cef4e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80')"
    class="relative bg-no-repeat bg-cover lg:bg-center p-4 bg-top-right"
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

    <div class="max-w-5xl mx-auto lg:py-16 py-2">
        <h2 class="lg:text-5xl text-4xl font-bold text-white">
            Book a trip. Host travels.
        </h2>
        <div
            class="flex items-center flex-wrap justify-start max-w-2xl lg:mx-0 mx-3"
        >
            <div class="lg:pr-5 w-full lg:w-1/2 lg:mb-0 mt-14">

                <a
                    href="{{route('auth.login')}}"
                    class="transition bg-white px-10 py-3  rounded font-bold hover:bg-gray-300 block w-full text-center border-2 border-white"
                >Login</a
                >
            </div>

            <div class="lg:pl-5 w-full lg:w-1/2 mt-14">

                <a
                    href="{{route('auth.register')}}"
                    class="transition bg-transparent px-10 py-3 rounded font-bold hover:bg-gray-300 block w-full text-center text-white hover:text-gray-800 border-2 border-white"
                >Register</a
                >
            </div>

        </div>
    </div>
</header>

<div class="max-w-6xl mx-auto lg:py-16 py-12 lg:px-0 px-4">
    <h3 class="font-bold bold text-2xl mb-4 leading-none">
        Book unique homes and experiences.
    </h3>
    <form action="#" class="lg:mb-16 mb-10">
        @csrf

        <div class="flex items-start justify-start flex-wrap">
            {{--check in--}}
            <div class="lg:w-1/5 w-full lg:px-2 mb-4 mr-2 lg:mb-0">
                <label for="checkin"
                >Check In </label
                >
                <input
                    type="date"
                    class="relative border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                    id="checkin"
                    placeholder="yyyy/mm/dd"

                />
            </div>

            {{--check out--}}
            <div class="lg:w-1/5 w-full lg:px-2 mr-2 lg:mb-0">
                <label for="checkout"
                >Check Out</label
                >
                <input
                    type="date"
                    class="relative border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                    id="checkin_checkout"
                    placeholder="yyyy/mm/dd"
                />
            </div>

            {{--guest numbers--}}
            <div class="lg:w-1/5 w-full lg:pl-2 mr-2 lg:mb-0">
                <label for="guests">Guests </label>
                <div
                    class="relative border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                >
                    <select id="guests" name="guested">
                        <option value="1">1 guests</option>
                        <option value="2">2 guests</option>
                        <option value="3">3 guests</option>
                    </select>
                    {{--                    <div--}}
                    {{--                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"--}}
                    {{--                    ></div>--}}
                </div>
            </div>

            {{--meal--}}
            <div class="lg:w-1/5 w-full lg:pl-2 mr-2 lg:mb-0">
                <label for="dinner">Meals </label>

                <div
                    class="relative outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                >

                    <label class="container mr-1">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark">Breakfast</span>
                    </label>
                    <label class="container">
                        <input type="checkbox">
                        <span class="checkmark">Dinner</span>
                    </label>
                </div>
            </div>

            {{--button--}}
            <div class="lg:w-1/6 w-full lg:pl-2 lg:mb-0 lg:mt-2">
                <div
                    class="relative outline-none px-0 py-4 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                >
                    <a
                        href="#"
                        class="bg-gradient-to-r from-yellow-400 via-red-600 to-yellow-400 hover:ring-2 shadow-lg px-9 py-3 rounded text-white font-bold inline-block"
                    >
                        Book Now
                    </a>
                </div>
            </div>
        </div>
    </form>

    <h3 class="font-bold bold text-2xl mb-4 leading-none">
        What guests are saying about homes in here.
    </h3>
    <div class="flex lg:items-center items-start">
        <svg
            class="w-4 h-4 flex-shrink-0"
            viewBox="0 0 24 24"
            role="presentation"
            aria-hidden="true"
            focusable="false"
            style="height: 24px; width: 24px; fill: #ffb400"
        >
            <path
                d="m21.95 9.48a.84.84 0 0 0 -.87-.48h-4.62a.5.5 0 0 0 0 1l4.14.01-4.81 4.17a.5.5 0 0 0 -.14.57l2.65 6.38-6.07-3.72a.5.5 0 0 0 -.52 0l-6.08 3.72 2.65-6.37a.5.5 0 0 0 -.13-.57l-4.75-4.18h5.75a.5.5 0 0 0 .46-.3l2.37-5.37 1.58 3.57a.5.5 0 0 0 .91-.41l-1.72-3.88a.8.8 0 0 0 -1.56-.01l-2.38 5.39h-5.9a.83.83 0 0 0 -.87.48.85.85 0 0 0 .32.96l4.85 4.25-2.78 6.67a.81.81 0 0 0 .16.98.66.66 0 0 0 .43.15 1.1 1.1 0 0 0 .56-.18l6.37-3.91 6.38 3.92a.81.81 0 0 0 .99.03c.15-.12.37-.41.15-1l-2.77-6.66 4.92-4.26a.84.84 0 0 0 .31-.95zm-.78.53h-.01"
                fill="#484848"
            ></path>
            <path
                d="m11 21.5a.5.5 0 1 1 -.5-.5.5.5 0 0 1 .5.5zm-3.5-15.5a.5.5 0 1 0 .5.5.5.5 0 0 0 -.5-.5zm15 10h-.5v-.5a.5.5 0 0 0 -1 0v .5h-.5a.5.5 0 0 0 0 1h .5v.5a.5.5 0 0 0 1 0v-.5h.5a.5.5 0 0 0 0-1zm-15-13h-.5v-.5a.5.5 0 0 0 -1 0v .5h-.5a.5.5 0 0 0 0 1h .5v.5a.5.5 0 0 0 1 0v-.5h.5a.5.5 0 0 0 0-1zm10.22 7.54a.84.84 0 0 0 -.17-.02q-.28-.01-3.19 0a .6.6 0 0 1 -.55-.35l-1.5-3.23a.42.42 0 0 0 -.75 0l-1.81 4.14a2.92 2.92 0 0 0 4.12 3.72l.46-.26 3.49-2.99.16-.18a.5.5 0 0 0 -.26-.82z"
            ></path>
        </svg>
        <p class="pl-2">
            Japanese homes were <strong>rated 4.8 out of 5 stars</strong> with
            <strong>42,500,000+ reviews</strong>
        </p>
    </div>
    <section class="flex items-start flex-wrap justify-between lg:my-10 my-6">
        <!-- card-1 -->
        <article class="lg:w-1/3 w/-full lg:pr-4 lg:mb-0 mb-6">
            <img
                src="https://images.unsplash.com/photo-1603111692119-c52e275031bc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                alt="" class="object-cover rounded w-full"/>
            <div class="my-3 flex justify-start items-center">
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
            </div>
            <p class="text-gray-700 font-light text-sm leading-snug">
                What a wonderful little cottage! More spacious and adorable than the
                picture show. We never met our hosts,but we felt welcome and ...
            </p>
            <div class="flex items-center justify-start my-4">
                <img
                    src="https://images.unsplash.com/photo-1617187444233-1f7be7f052dc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=905&q=80"
                    alt=""
                    class="w-12 h-12 rounded-full flex-shrink-0"
                />
                <div class="flex-1 pl-4 text-sm">
                    <p class="font-semibold leading-none">Taro</p>
                    <p>Japan</p>
                </div>
            </div>
        </article>
        <!-- card-2 -->
        <article class="lg:w-1/3 w/-full lg:px-2 lg:mb-0 mb-6">
            <img
                src="https://images.unsplash.com/photo-1614301246509-d1fc7d78b6b6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                alt="" class="object-cover rounded w-full"/>
            <div class="my-3 flex justify-start items-center">
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
            </div>
            <p class="text-gray-700 font-light text-sm leading-snug">
                What a wonderful little cottage! More spacious and adorable than the
                picture show. We never met our hosts,but we felt welcome and ...
            </p>
            <div class="flex items-center justify-start my-4">
                <img
                    src="https://images.unsplash.com/photo-1611095567319-2f4c389168a9?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2551&q=80"
                    alt=""
                    class="w-12 h-12 rounded-full flex-shrink-0"
                />
                <div class="flex-1 pl-4 text-sm">
                    <p class="font-semibold leading-none">hanako</p>
                    <p>Japan</p>
                </div>
            </div>
        </article>
        <!-- card-3 -->
        <article class="lg:w-1/3 w/-full lg:pl-4 lg:mb-0 mb-6">
            <img
                src="https://images.unsplash.com/photo-1610375233775-6e0166927193?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2547&q=80"
                alt="" class="object-cover rounded w-full"/>
            <div class="my-3 flex justify-start items-center">
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
                <svg
                    class="fill-current w-4 h-4 text-cyan mr-1"
                    viewBox="0 0 1000 1000"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M972 380c9 28 2 50-20 67L725 619l87 280c11 39-18 75-54 75-12 0-23-4-33-12L499 790 273 962a58 58 0 0 1-78-12 50 50 0 0 1-8-51l86-278L46 447c-21-17-28-39-19-67 8-24 29-40 52-40h280l87-279c7-23 28-39 52-39 25 0 47 17 54 41l87 277h280c24 0 45 16 53 40z"
                    />
                </svg>
            </div>
            <p class="text-gray-700 font-light text-sm leading-snug">
                What a wonderful little cottage! More spacious and adorable than the
                picture show. We never met our hosts,but we felt welcome and ...
            </p>
            <div class="flex items-center justify-start my-4">
                <img
                    src="https://images.unsplash.com/photo-1612831456327-9be2ebcfb715?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80"
                    alt=""
                    class="w-12 h-12 rounded-full flex-shrink-0"
                />
                <div class="flex-1 pl-4 text-sm">
                    <p class="font-semibold leading-none">yuri</p>
                    <p>Japan</p>
                </div>
            </div>
        </article>
    </section>

    <h3
        class="font-bold bold text-2xl lg:mb-2 mb-4 leading-none pb-4 border-b border-gray-300"
    >
        Traveling with Airbnb
    </h3>
    <section
        class="flex flex-wrap items-start justify-between lg:mb-8 mb-6 border-b border-gray-300 pb-8"
    >
        <div class="lg:w-1/3 w-full lg:pr-4 lg:mb-0 mb-6">
            <svg
                class="w-8 h-8"
                viewBox="0 0 24 24"
                fill="#60B6B5"
                fill-opacity="0"
                stroke="#60B6B5"
                stroke-width="1"
                focusable="false"
                aria-hidden="true"
                role="presentation"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path
                    d="m17.5 2.9c-2.1 0-4.1 1.3-5.4 2.8-1.6-1.6-3.8-3.2-6.2-2.7-1.5.2-2.9 1.2-3.6 2.6-2.3 4.1 1 8.3 3.9 11.1 1.4 1.3 2.8 2.5 4.3 3.6.4.3 1.1.9 1.6.9s1.2-.6 1.6-.9c3.2-2.3 6.6-5.1 8.2-8.8 1.5-3.4 0-8.6-4.4-8.6"
                    stroke-linejoin="round"
                ></path>
            </svg>
            <p class="font-bold mt-3 mb-1">7/24 Customer Support</p>
            <p class="text-gray-700 font-light text-sm leading-snug">
                Day or night, we're here for you. Talk to our support team from any
                where in the world, any hour of day.
            </p>
        </div>
        <div class="lg:w-1/3 w-full lg:px-2 lg:mb-0 mb-6">
            <svg
                class="w-8 h-8"
                viewBox="0 0 24 24"
                role="presentation"
                aria-hidden="true"
                focusable="false"
                fill="#60B6B5"
            >
                <path
                    d="m23.57 11.4-1.75-1.76-3.85-3.87-1.78-1.79-2.7-2.71-.82-.83-.22-.23-.06-.06c-.22-.22-.53-.22-.73-.02l-1.75 1.76-3.85 3.87-3.85 3.87-1.75 1.76a1.49 1.49 0 0 0 -.44 1.05v.01c0 .38.15.77.44 1.06l.55.55a1.49 1.49 0 0 0 2.01.08v8.4c0 .81.68 1.45 1.5 1.45h15c .82 0 1.5-.65 1.5-1.45v-8.4c.59.49 1.45.47 2.01-.08l.55-.55c.29-.29.44-.68.44-1.06v-.01c0-.38-.14-.77-.44-1.06zm-3.57 11.16c0 .24-.22.45-.5.45h-15c-.28 0-.5-.21-.5-.45v-9.36l8-7.99 8 7.99zm2.85-9.74-.55.55c-.2.2-.52.2-.71.01l-9.24-9.22a.5.5 0 0 0 -.71 0l-9.24 9.22a.5.5 0 0 1 -.71-.01l-.55-.55a.5.5 0 0 1 -.01-.71l1.75-1.76 3.85-3.87 3.85-3.87 1.4-1.4.77.77 2.7 2.71 1.78 1.79 3.85 3.87 1.75 1.76a.51.51 0 0 1 -.01.71z"
                    fill-rule="evenodd"
                ></path>
            </svg>
            <p class="font-bold mt-3 mb-1">Global hospitality standards</p>
            <p class="text-gray-700 font-light text-sm leading-snug">
                Guests review their hosts after each stay. All hosts must maintain a
                minimum rating and our hospitality standards to be on airbnb.
            </p>
        </div>
        <div class="lg:w-1/3 w-full lg:pl-4">
            <svg
                class="w-8 h-8"
                viewBox="0 0 24 24"
                role="presentation"
                aria-hidden="true"
                focusable="false"
                fill="#60B6B5"
            >
                <path
                    d="m15.37 13.54-.01.01a.53.53 0 0 0 .01-.01m-.37 9.46h-11.5c-.28 0-.9-.22-1.38-.58-.71-.52-1.12-1.31-1.12-2.42 0-.04 0-.07.01-.11.09-1.1 1.59-2.44 4.02-3.79a33.14 33.14 0 0 1 2.9-1.42 35.57 35.57 0 0 1 1.31-.54c.63-.26.71-.95.18-1.35a4.55 4.55 0 0 1 -.38-.31 7.1 7.1 0 0 1 -.84-.9c-.73-.92-1.17-1.96-1.2-3.09v-2.99c.07-2.36 2.38-4.5 5.04-4.5 2.67 0 4.96 2.14 4.96 4.5v3c0 1.13-.43 2.17-1.15 3.11a7.35 7.35 0 0 1 -1.09 1.13l-.08.07c-.02.02-.02.02-.05.05s-.03.03-.09.14c-.05.47-.05.47.46.7a.49.49 0 0 0 .36-.15l.06-.05a8.32 8.32 0 0 0 1.23-1.28c.84-1.1 1.35-2.35 1.35-3.72v-3c0-2.92-2.75-5.5-5.96-5.5-3.2 0-5.96 2.56-6.04 5.49v3.01c.03 1.38.56 2.62 1.42 3.71.31.39.63.73.96 1.03.06.05.1.08.15.12a34.28 34.28 0 0 0 -3.98 1.87c-2.73 1.51-4.41 3.02-4.54 4.58a2.41 2.41 0 0 0 -.01.19c0 2.55 1.91 3.99 3.5 4h11.5a.5.5 0 1 0 0-1m7.67-4.22c-.36.74-.97 1.55-1.78 2.38a20.33 20.33 0 0 1 -1.89 1.71 19.94 19.94 0 0 1 -1.89-1.71c-.81-.83-1.42-1.64-1.78-2.38-.22-.45-.33-.86-.33-1.23 0-.99.61-1.56 1.43-1.56.7 0 1.55.53 2.18 1.31a.5.5 0 0 0 .78 0c .63-.78 1.48-1.31 2.18-1.31.82 0 1.43.57 1.43 1.56 0 .36-.11.77-.33 1.23m-1.1-3.78c-.89 0-1.82.5-2.57 1.25-.75-.76-1.68-1.25-2.57-1.25-1.36 0-2.43 1.01-2.43 2.56 0 .53.15 1.08.43 1.66.41.85 1.09 1.74 1.96 2.64a21.09 21.09 0 0 0 2.31 2.05.5.5 0 0 0 .6 0 20.91 20.91 0 0 0 2.31-2.05c.87-.9 1.55-1.79 1.96-2.64.28-.58.43-1.13.43-1.66 0-1.55-1.07-2.56-2.43-2.56"
                    fill-rule="evenodd"
                ></path>
            </svg>
            <p class="font-bold mt-3 mb-1">5 stars hosts</p>
            <p class="text-gray-700 font-light text-sm leading-snug">
                From fresh-pressed sheets to tips on where to get the best brunch,
                our hosts are full of local hospitality.
            </p>
        </div>
    </section>

</div>
<footer class="border-t bg-gray-100 border-gray-300 py-10 text-sm">
    <div
        class="max-w-5xl mx-auto pb-8 mb-6 border-b border-gray-300 px-4 lg:px-0"
    >
        <div class="flex flex-wrap items-start justify-start">
            <div class="lg:w-1/4 w-full lg:mb-0 mb-6">
                <h5 class="font-semibold text-gray-700 mb-2">Airbnb</h5>
                <ul class="leading-loose">
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Careers</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >News</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Policies</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Help</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Diversity & Belonging</a
                        >
                    </li>
                </ul>
            </div>
            <div class="lg:w-1/4 w-full lg:mb-0 mb-6">
                <h5 class="font-semibold text-gray-700 mb-2">Discover</h5>
                <ul class="leading-loose">
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Trust &amp; Safety</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Travel Credit</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Gift Cards</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Airbnb Citizen</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Business Travel</a
                        >
                    </li>
                    <li class="flex">
                        <a href="#" class="text-gray-600 hover:underline font-semibold"
                        >Things To Do</a
                        >
                        <span
                            class="bg-cyan px-1 inline-flex items-center h-5 text-white rounded ml-1 mt-1 inline-block bg-black text-xs"
                        >New</span
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Airbnbmag</a
                        >
                    </li>
                </ul>
            </div>
            <div class="lg:w-1/4 w-full lg:mb-0 mb-6">
                <h5 class="font-semibold text-gray-700 mb-2">Hosting</h5>
                <ul class="leading-loose">
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Why Host</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Hospitality</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Responsible Hosting</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Community Center</a
                        >
                    </li>
                    <li class="flex">
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Host an Experience</a
                        >
                        <span
                            class="bg-cyan px-1 inline-flex items-center h-5 text-white rounded ml-1 mt-1 inline-block bg-black text-xs"
                        >New</span
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Open Homes</a
                        >
                    </li>
                    <li class="flex">
                        <a href="#" class="text-gray-600 hover:underline font-semibold"
                        >Donations</a
                        >
                        <span
                            class="bg-cyan px-1 inline-flex items-center h-5 text-white rounded ml-1 mt-1 inline-block bg-black text-xs"
                        >New</span
                        >
                    </li>
                </ul>
            </div>
            <div class="lg:w-1/4 w-full">
                <div class="flex items-baseline justify-start mb-2">
                    <a href="#" class="mr-2">
                        <svg
                            viewBox="0 0 32 32"
                            role="img"
                            aria-label="Navigate to Facebook"
                            focusable="false"
                            class="text-gray-600 fill-current w-4 h-4"
                        >
                            <path
                                d="m8 14.41v-4.17c0-.42.35-.81.77-.81h2.52v-2.08c0-4.84 2.48-7.31 7.42-7.35 1.65 0 3.22.21 4.69.64.46.14.63.42.6.88l-.56 4.06c-.04.18-.14.35-.32.53-.21.11-.42.18-.63.14-.88-.25-1.78-.35-2.8-.35-1.4 0-1.61.28-1.61 1.73v1.8h4.52c.42 0 .81.42.81.88l-.35 4.17c0 .42-.35.71-.77.71h-4.21v16c0 .42-.35.81-.77.81h-5.21c-.42 0-.8-.39-.8-.81v-16h-2.52a.78.78 0 0 1 -.78-.78"
                                fill-rule="evenodd"
                            ></path>
                        </svg
                        >
                    </a>

                    <a href="#" class="mr-2">
                        <svg
                            class="text-gray-600 fill-current w-4 h-4"
                            viewBox="0 0 32 32"
                            role="img"
                            aria-label="Navigate to Twitter"
                            focusable="false"
                        >
                            <path
                                d="m31 6.36c-1.16.49-2.32.82-3.55.95 1.29-.76 2.22-1.87 2.72-3.38a13.05 13.05 0 0 1 -3.91 1.51c-1.23-1.28-2.75-1.94-4.51-1.94-3.41 0-6.17 2.73-6.17 6.12 0 .49.07.95.17 1.38-4.94-.23-9.51-2.6-12.66-6.38-.56.95-.86 1.97-.86 3.09 0 2.07 1.03 3.91 2.75 5.06-1-.03-1.92-.3-2.82-.76v.07c0 2.89 2.12 5.42 4.94 5.98-.63.17-1.16.23-1.62.23-.3 0-.7-.03-1.13-.13a6.07 6.07 0 0 0 5.74 4.24c-2.22 1.74-4.78 2.63-7.66 2.63-.56 0-1.06-.03-1.43-.1 2.85 1.84 6 2.76 9.41 2.76 7.29 0 12.83-4.01 15.51-9.3 1.36-2.66 2.02-5.36 2.02-8.09v-.46c-.03-.17-.03-.3-.03-.33a12.66 12.66 0 0 0 3.09-3.16"
                                fill-rule="evenodd"
                            ></path>
                        </svg>
                    </a>

                    <a href="#">
                        <svg
                            viewBox="0 0 24 24"
                            role="img"
                            aria-label="Navigate to Instagram"
                            focusable="false"
                            class="text-gray-600 fill-current w-4 h-4"
                        >
                            <path
                                d="m23.09.91c-.61-.61-1.33-.91-2.17-.91h-17.84c-.85 0-1.57.3-2.17.91s-.91 1.33-.91 2.17v17.84c0 .85.3 1.57.91 2.17s1.33.91 2.17.91h17.84c.85 0 1.57-.3 2.17-.91s.91-1.33.91-2.17v-17.84c0-.85-.3-1.57-.91-2.17zm-14.48 7.74c.94-.91 2.08-1.37 3.4-1.37 1.33 0 2.47.46 3.41 1.37s1.41 2.01 1.41 3.3-.47 2.39-1.41 3.3-2.08 1.37-3.41 1.37c-1.32 0-2.46-.46-3.4-1.37s-1.41-2.01-1.41-3.3.47-2.39 1.41-3.3zm12.66 11.63c0 .27-.09.5-.28.68a.92.92 0 0 1 -.67.28h-16.7a.93.93 0 0 1 -.68-.28.92.92 0 0 1 -.27-.68v-10.13h2.2a6.74 6.74 0 0 0 -.31 2.05c0 2 .73 3.71 2.19 5.12s3.21 2.12 5.27 2.12a7.5 7.5 0 0 0 3.75-.97 7.29 7.29 0 0 0 2.72-2.63 6.93 6.93 0 0 0 1-3.63c0-.71-.11-1.39-.31-2.05h2.11v10.12zm0-13.95c0 .3-.11.56-.31.77a1.05 1.05 0 0 1 -.77.31h-2.72c-.3 0-.56-.11-.77-.31a1.05 1.05 0 0 1 -.31-.77v-2.58c0-.29.11-.54.31-.76s.47-.32.77-.32h2.72c.3 0 .56.11.77.32s.31.47.31.76z"
                                fill-rule="evenodd"
                            ></path>
                        </svg>
                    </a>
                </div>

                <ul class="leading-relaxed">
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Terms</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Privacy</a
                        >
                    </li>
                    <li>
                        <a class="text-gray-600 hover:underline font-semibold" href="#"
                        >Site Map</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="max-w-5xl mx-auto flex items-center px-4 lg:px-0">
        <svg
            class="fill-current text-gray-600 w-5 h-5 flex-shrink-0"
            viewBox="0 0 1000 1000"
            role="presentation"
            aria-hidden="true"
            focusable="false"
        >
            <path
                d="m499.3 736.7c-51-64-81-120.1-91-168.1-10-39-6-70 11-93 18-27 45-40 80-40s62 13 80 40c17 23 21 54 11 93-11 49-41 105-91 168.1zm362.2 43c-7 47-39 86-83 105-85 37-169.1-22-241.1-102 119.1-149.1 141.1-265.1 90-340.2-30-43-73-64-128.1-64-111 0-172.1 94-148.1 203.1 14 59 51 126.1 110 201.1-37 41-72 70-103 88-24 13-47 21-69 23-101 15-180.1-83-144.1-184.1 5-13 15-37 32-74l1-2c55-120.1 122.1-256.1 199.1-407.2l2-5 22-42c17-31 24-45 51-62 13-8 29-12 47-12 36 0 64 21 76 38 6 9 13 21 22 36l21 41 3 6c77 151.1 144.1 287.1 199.1 407.2l1 1 20 46 12 29c9.2 23.1 11.2 46.1 8.2 70.1zm46-90.1c-7-22-19-48-34-79v-1c-71-151.1-137.1-287.1-200.1-409.2l-4-6c-45-92-77-147.1-170.1-147.1-92 0-131.1 64-171.1 147.1l-3 6c-63 122.1-129.1 258.1-200.1 409.2v2l-21 46c-8 19-12 29-13 32-51 140.1 54 263.1 181.1 263.1 1 0 5 0 10-1h14c66-8 134.1-50 203.1-125.1 69 75 137.1 117.1 203.1 125.1h14c5 1 9 1 10 1 127.1.1 232.1-123 181.1-263.1z"
            ></path>
        </svg>
        <p class="text-gray-600 text-sm pl-2">
            &copy; 2019 Airbnb, Inc. All rights reserved.
        </p>
    </div>
</footer>
</body>
</html>
