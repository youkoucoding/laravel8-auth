<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel8-authentication-demo</title>
</head>
<body>

<nav class='flex justify-between items-center h-16 font-mono bg-gray-100 font-bold  relative text-black bg-white' role='navigation'>
    <a href="/" class='pl-8'>Navbar</a>
    <div class='px-4 cursor-pointer md:hidden'>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </div>
    <div class="pr-8 md:block hidden">
        <a href="{{URL("/")}}" class='p-4'>Home</a>
        <a href="{{URL("/")}}" class='p-4'>Menu</a>
        <a href="{{URL("/")}}" class='p-4'>About</a>
        <a href="{{URL("/")}}" class='p-4'>Contact</a>
    </div>
</nav>

{{--template inhertence--}}
<div class="mb-0 pb-0">
    @yield("dynamic_content")
</div>
</body>
</html>
