<x-app-layout>
<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    
    @php
        $r = Auth::user()->name; 
        $nome = explode(" ", $r);
    @endphp


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-xl">Welcome, <span class="font-bold" style="font-weight:bold;">{{$nome[0]}}</span></h1>
                    <h1><span class="font-extrabold" style="font-weight:bold;">Email:</span> {{Auth::user()->email}}</h1>
                    <h1><span class="font-extrabold" style="font-weight:bold;">Phone:</span> {{Auth::user()->phone}}</h1>
                    <h1></h1>
                    
                    <div class="alert alert-dark" role="alert">
                        A simple dark alert—check it out!
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
