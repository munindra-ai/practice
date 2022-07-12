@extends('layouts.app')

@section('content')

<x-frontend.account-layout>
    <x-slot name="mobileHeading">
        <x-frontend.partials.account-navigator :heading="$heading" />
    </x-slot>
        
   <?php 
   $name = $user->name;
   $dob = $user->dob;
   $data = 'name : ' . $name .' '. ' age : ' . $dob ;
   ?>

         <div class="card">
            <div class="card-body">
                <!-- {!! QrCode::size(300)->generate($data) !!} -->
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(600)->generate($data)) !!} ">
                
            </div>
        </div> 
        <div>

    
    

    <x-slot name="heading">
        <h4 class="text-xl text-gray-800 leading-relaxed tracking-wide font-medium mb-3 font-poppins">{{ $heading }}</h4>
    </x-slot>
    <div class="container mt-4">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
   
   

    <div class="bg-white rounded p-4 md:p-6">
        @include('partials.alerts')
        <livewire:user-profile :user='auth()->user()'>
    </div>
</x-frontend.account-layout>
@endsection
