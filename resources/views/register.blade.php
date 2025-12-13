@extends('layouts.regLog')

@section('content')

<form action = "{{ route('register') }}" method="POST" class = "flex flex-col gap-y-5">
    @csrf
    
    <div class="flex flex-col">
        <h1 class="text-xl font-semibold">Create Your Library Account</h1>
        <p class="text-md mt-1">Please complete all fields to create your own accoutn</p>
    </div>

    <div class="flex flex-col gap-y-5">
        <div class="flex flex-col">
            <label class="ms-[4px]">Full Name</label>
            <input 
                type="name" 
                name="name" 
                class="mt-1 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300"
                placeholder="Enter your name"
                required
            >
        </div>

        <div class="flex flex-col">
            <label class="ms-[4px]">Email</label>
            <input 
                type="email" 
                name="email" 
                class="mt-1 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300"
                placeholder="example@gmail.com"
                required
            >
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col">
            <label class="ms-[4px]">Password</label>
            <input 
                type="password" 
                name="password"
                class="mt-1 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300"
                placeholder="Atleast 8 characters long"
                required
            >
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        

        <button class="bg-[#EAD4AA] text-black font-bold py-3 px-8 rounded flex items-center justify-center space-x-2 hover:bg-[#dcc08e] transition mt-2">
            <span>Sign Up</span>
        </button>
    </div>

    <div class="flex flex-row gap-[4px] self-center">
        <p>Have an account already ?</p>
        <a href="{{ route('loginForm') }}" class="text-orange-200">Login</a>
    </div>
</form>
@endSection
