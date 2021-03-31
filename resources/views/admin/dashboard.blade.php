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
               <table class="grid grid-cols-6 space-y-6 space-x-3">
                   <thread>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Mobile</th>
                   </thread>
                   <tbody>
                   <tr>
                       <td>{{$LoggedUserInfo['name']}}</td>
                       <td>{{$LoggedUserInfo['email']}}</td>
                       <td>{{$LoggedUserInfo['mobile']}}</td>
                       <td><a href="{{route('auth.logout')}}">LogOut</a></td>
                   </tr>
                   </tbody>
               </table>
            </div>
        </div>
    </section>
@endsection
