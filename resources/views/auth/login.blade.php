@extends('layouts.app')

@section('dynamic_content')
    <div>
        <div class="flex flex-wrap justify-center items-center font-mono bg-white pt-24 rounded-lg">

            <div class="w-4/12">
                @if (session('Error'))
                    <h2>{{ session('Error') }}</h2>
                @endif

                <form action="{{ URL('/login') }}" method="POST">
                    @csrf

                    <div class="bg-green-300 mb-4 p-4 text-center rounded-2xl">
                        <h1 class="uppercase text-lg">Please Login</h1>
                    </div>
                    {{-- phone number  --}}
                    <div class="mb-4">
                        <input type="text" name="phone"
                               class="@error('mobile') is-valid @enderror   bg-gray-100 border-2 w-full p-4 rounded-lg"
                               placeholder="Email Address" value="{{ old('mobile')}}">


                        @error('mobile')
                        <div>
                            <h1 class="text-red-300">Please enter valid email address</h1>
                        </div>
                        @enderror
                    </div>

                    {{-- password  --}}
                    <div class="mb-4">
                        <label for="">Password</label>
                        <input type="password" name="password"
                               class="@error('password') is-valid @enderror bg-gray-100 border-2 w-full p-4 rounded-lg"
                               placeholder="Password">


                        @error('password')
                        <div>
                            <h1 class="text-red-300">Please enter valid password</h1>
                        </div>
                        @enderror
                    </div>

                    {{-- remember me  --}}
                    <div class="mb-4">
                        <input type="checkbox" name="rememberme">
                        <label for="">Remember Me</label>
                    </div>

                    {{-- Submit  --}}
                    <div class="mb-0 flex justify-center">
                        <input type="submit" name="submit" value="LOGIN" class="bg-yellow-500 border-2 p-4 rounded-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
