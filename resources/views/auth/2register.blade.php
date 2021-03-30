@extends('layouts.app')

@section('dynamic_content')
    <div class="flex flex-wrap justify-center items-center font-mono bg-white pt-24 rounded-lg">

        <div class="w-4/12">
            <form action="{{ URL('/register') }}" method="POST" >
                @csrf
                <div class="bg-green-300 mb-4 p-4 text-center rounded-2xl">
                    <h1 class="uppercase text-lg">Please Register</h1>
                </div>

                {{-- user name  --}}
                <div class="mb-4">
                    <input type="text" name="name"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                           placeholder="User Name" value="{{ old('uname')}}">

                    @error('name')
                    <div>
                        <h1 class="text-red-300">Name is required|longer</h1>
                    </div>
                    @enderror

                </div>

                {{-- email address  --}}
                <div class="mb-4">
                    <input type="email" name="email"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                           placeholder="Email Address" value="{{ old('email')}}">


                    @error('email')
                    <div>
                        <h1 class="text-red-300">Please enter valid email address</h1>
                    </div>
                    @enderror
                </div>

                {{-- phone number  --}}
                <div class="mb-4">
                    <input type="text" name="mobile"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                           placeholder="phone number" value="{{ old('mobile')}}">


                    @error('mobile')
                    <div>
                        <h1 class="text-red-300">Please enter valid email address</h1>
                    </div>
                    @enderror
                </div>

                {{-- password  --}}
                <div class="mb-4">
                    <input type="password" name="password"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                           placeholder="Password">


                    @error('password')
                    <div>
                        <h1 class="text-red-300">Please enter valid password</h1>
                    </div>
                    @enderror
                </div>

                {{-- Confirm Password  --}}
                <div class="mb-4">
                    <input type="password" name="password_confirmation"
                           class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                           placeholder="Confirm Password">


                    @error('password_confirmation')
                    <div>
                        <h1 class="text-red-300">Password does not match</h1>
                    </div>
                    @enderror
                </div>

                {{-- Submit  --}}
                <div class="mb-0 flex justify-center">
                    <input type="submit" name="submit" value="SUBMIT" class="bg-yellow-500 border-2 p-4 rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection
