@extends('layouts.base')
@section('content')
@include('layouts.header-back', ['text' => "User List"])
<div class="container-fluid" style="padding-bottom: 100px !important;">
  <div class="row  justify-content-center">
    <div class="col-md-6 ">
        @foreach ( $user as $item)
      <div class="card my-1 ">
        <div class="card-body d-flex">
          <div class="me-3">
            <img src="https://www.011global.com/Account/Slices/user-anonymous.png" alt="" srcset="" class="img-fluid"  width="75px" >
          </div>

            <div>
                <h4 class="text-center mb-0">{{ $item->name ?? '' }}</h4>
                <p>{{ $item->email ?? '' }}</p>
            </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>

  </div>
@endsection
