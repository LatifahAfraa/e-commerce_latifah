@extends('layouts.base')
@section('content')
@include('layouts.header-back', ['text' => "My Account"])

    <div class="text-center mt-4">
        <img src="https://www.011global.com/Account/Slices/user-anonymous.png" alt="" srcset="" class="img-fluid"
            width="150px">
        <h4 class="text-center mb-0">{{ auth()->user()->name ?? ''.last_name ?? '' }}</h4>
        <p>{{ auth()->user()->email ?? '' }}</p>
    </div>
@endsection
