@extends('layouts.app')

@section('dynamic_content')
    <section class="pt-20 pb-36 px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">
                <h1 class="text-6xl font-bold text-gray-800">Login</h1>
            </div>
        </div>
        <div class="mt-16 relative max-w-2xl mx-auto">
            <div
                class="absolute z-10 inset-0 bg-gradient-to-r from-indigo-300 via-green-500 to-blue-500 shadow-lg transform -skew-x-6 sm:skew-x-0 sm:-rotate-6 sm:rounded-lg"
            ></div>
            <div class="relative z-20 bg-white rounded-md shadow-md p-12">
                <form action="{{}}" method="POST">
                    @csrf

                    {{--username--}}
                    <div class="flex flex-col space-y-1 my-4">
                        <label class="text-gray-600 text-lg font-bold" for="name">Name</label>
                        <input
                            type="text"
                            name="name"
                            placeholder="Name"
                            {{--                            value="{{old('name')}}"--}}
                            class="border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                        />
                    </div>

                    {{-- mobile--}}
                    <div class="flex flex-col space-y-1 my-4">
                        <label class="text-gray-600 text-lg font-bold" for="mobile">Mobile Number</label>
                        <input
                            type="text"
                            name="mobile"
                            placeholder="Mobile Number"
                            class="border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                        />
                    </div>

                    {{-- email--}}
                    <div class="flex flex-col space-y-1 my-4">
                        <label class="text-gray-600 text-lg font-bold" for="email">Email</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            class="border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                        />
                    </div>

                    {{-- password --}}
                    <div class="flex flex-col space-y-1 my-4">
                        <label class="text-gray-600 text-lg font-bold" for="password">Password</label>
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            class="border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                        />
                    </div>

                    {{-- password_confirm --}}
                    <div class="flex flex-col space-y-1 my-4">
                        <label class="text-gray-600 text-lg font-bold" for="password">Password Confirm</label>
                        <input
                            type="password"
                            name="password"
                            placeholder="Password Confirm"
                            class="border border-gray-200 outline-none px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                        />
                    </div>

                    {{--Button--}}
                    <div class="flex items-baseline justify-between mt-4">
                        <button
                            class="w-1/2 mt-5  px-6 py-3 bg-gradient-to-r from-yellow-300 via-red-300 to-yellow-600 rounded-md shadow-md text-sm font-bold text-white"
                        >
                            Login
                        </button>

                        <p class="text-lg font-bold mr-8">Don't have a account?</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
