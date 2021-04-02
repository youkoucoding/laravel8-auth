@extends('layouts.app')

@section('dynamic_content')
    <section class="pt-20 pb-36 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">
                <h1 class="text-6xl font-bold text-gray-800">Order Confirm</h1>
            </div>
        </div>
        <div class="mt-16 relative max-w-2xl mx-auto flex flex-wrap">
            <div
                class="absolute z-10 inset-0 bg-gradient-to-r from-yellow-300 via-red-500 to-gray-500 shadow-lg transform -skew-x-6 sm:skew-x-0 sm:-rotate-6 sm:rounded-lg"
            ></div>
            <div class="relative z-20 bg-white rounded-md shadow-md p-12 ">
                <form action="{{route('auth.check')}}" method="POST">
                    @if(Session::get('fail'))
                        <div class="flex items-center text-xl text-red-600 inline-block py-4 px-10 bg-red-50 rounded">
                            {{Session::get('fail')}}
                        </div>
                    @endif

                    @csrf
                    <div class="flex flex-col flex-wrap space-y-3">
                        {{-- username--}}
                        <div class="flex flex-row space-x-4 items-center justify-between mx-10">
                            <p class="text-gray-700 text-lg font-bold">UserName:</p>
                            <p
                                class="border border-gray-200 outline-none bg-gradient-to-r from-yellow-200 via-red-100 to-gray-100 px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                            >Order Information.this is right? </p>
                        </div>

                        {{-- mobile--}}
                        <div class="flex flex-row space-x-4 items-center justify-between mx-10">
                            <p class="text-gray-700 text-lg font-bold">Mobile Number:</p>
                            <p
                                class="border border-gray-200 outline-none bg-gradient-to-r from-yellow-200 via-red-100 to-gray-100 px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                            >Order Information.this is right? </p>
                        </div>

                        {{-- check in and out --}}
                        <div class="flex flex-row space-x-4 items-center justify-between mx-10">
                            <p class="text-gray-700 text-lg font-bold">CheckIn-CheckOut:</p>
                            <p
                                class="border border-gray-200 outline-none bg-gradient-to-r from-yellow-200 via-red-100 to-gray-100 px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                            >Order Information.this is right? </p>
                        </div>

                        {{--Number of Customer--}}
                        <div class="flex flex-row space-x-4 items-center justify-between mx-10">
                            <p class="text-gray-700 text-lg font-bold">Numbers of Customer:</p>
                            <p
                                class="border border-gray-200 outline-none bg-gradient-to-r from-yellow-200 via-red-100 to-gray-100 px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                            >Order Information.this is right? </p>
                        </div>

                        {{-- Remarks --}}
                        <div class="flex flex-row space-x-4 items-center justify-between mx-10">
                            <p class="text-gray-700 text-lg font-bold">Remarks:</p>
                            <p
                                class="border border-gray-200 outline-none bg-gradient-to-r from-yellow-200 via-red-100 to-gray-100 px-4 py-4 rounded-md hover:border-gray-400 focus:border-gray-400"
                            >Order Information.this is right? </p>
                        </div>
                    </div>

                        <div class="flex flex-row items-center justify-between space-x-5 mt-3">
                            <button
                                class="w-1/2 mt-5  px-6 py-3 bg-gradient-to-r from-gray-200 via-white to-gray-400 rounded-md shadow-md text-sm font-bold text-gray-900"
                            >
                                Edit
                            </button>

                            <button
                                class="w-1/2 mt-5  px-6 py-3 bg-gradient-to-r from-yellow-400 via-red-400 to-yellow-400 rounded-md shadow-md text-sm font-bold text-gray-900"
                            >
                                Confirm
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </section>
@endsection
