@extends('layouts.app')

@section('dynamic_content')
    <section class="pt-20 pb-36 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">
                <h1 class="text-6xl font-bold text-gray-800">Dashboard</h1>
            </div>
        </div>
        <div class="mt-16 relative max-w-2xl mx-auto">
            <div
                class="absolute z-10 inset-0 bg-gradient-to-r from-yellow-300 via-red-500 to-blue-500 shadow-lg transform -skew-x-6 sm:skew-x-0 sm:-rotate-6 sm:rounded-lg"
            ></div>
            <div class="relative z-20 bg-white rounded-md shadow-md p-12">
                <div class="flex items-center justify-between flex-cols gap-x-10">
                    <table class="table-fixed">
                        <thead class="m-3 px-10">
                        <tr>
                            <th class="w-1/2">Name</th>
                            <th class="w-1/3">Email</th>
                            <th class="w-1/3">Mobile</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-emerald-200">
                            <td class="w-1/2">{{$LoggedUserInfo['name']}}</td>
                            <td class="w-1/3">{{$LoggedUserInfo['email']}}</td>
                            <td class="w-1/3">{{$LoggedUserInfo['mobile']}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="{{route('auth.logout')}}"
                       class="inline-block py-3 px-4 bg-gray-400 font-bold tracking-wider rounded-md ">Logout</a>
                </div>
            </div>
        </div>
    </section>
@endsection
