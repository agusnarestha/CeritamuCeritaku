@extends('layout.master')

@section('content')
@php
    $id_user = Auth::user()->id;
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{asset('img/temp.jpg')}}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center"> </p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <i class="fab fa-instagram"></i>
                    <a href="https://www.instagram.com/{{ $profile->instagram }}/" class="ml-2">{{ $profile->instagram }}</a>
                </li>
                <li class="list-group-item">
                    <i class="fab fa-twitter"></i>
                    <a href="https://twitter.com/{{ $profile->twitter }}/" class="ml-2">{{ $profile->twitter }}</a>
                </li>
              </ul>

              <a href="/profile/{{$id_user}}/edit" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            </div>
            <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Bio</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <p class="text-muted" style="text-align: justify">
                    {{ $profile->bio }}
                  </p>

                  <hr>

                </div>
        </div>
</div>

@endsection
