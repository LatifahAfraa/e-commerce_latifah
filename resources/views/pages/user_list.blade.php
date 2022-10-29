@extends('layouts.base')
@section('content')
@include('layouts.header-back', ['text' => "User Lists"])
<div class="form-group">
  <div class="row  justify-content-center">
    <div class="col-md-6 ">
      <div class="card  ">
        <div class="card-body d-flex">
          <div class="me-3">
            <img src="https://www.011global.com/Account/Slices/user-anonymous.png" alt="" srcset="" class="img-fluid"  width="75px" >
          </div>

            <div>
                <h4 class="text-center mb-0">{{ auth()->user()->name ?? '' }}</h4>
                <p>{{ auth()->user()->email ?? '' }}</p>
            </div>
        </div>
      </div>
    </div>
  </div>

  </div>
@endsection
