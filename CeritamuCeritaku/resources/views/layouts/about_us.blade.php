@extends('layout.master')
@section('title')
About Us
@endsection
@section('content')
@php
    $id_user = Auth::user()->id;
@endphp
<div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">

            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>Muhammad Rizq Athariq</b></h2>
                  <p class="text-muted text-sm"><b>About: </b> Full Stack Developer </p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Indonesia</li>
                    <li class="small mt-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : + 62</li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="{{asset('img/1.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="#" class="btn btn-sm bg-teal">
                  <i class="fas fa-comments"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> View Profile
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">

            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>Reihan Muhamad Aziz</b></h2>
                  <p class="text-muted text-sm"><b>About: </b> Full Stack Developer </p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Indonesia</li>
                    <li class="small mt-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : + 62</li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="{{asset('img/2.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="#" class="btn btn-sm bg-teal">
                  <i class="fas fa-comments"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> View Profile
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">

            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>Putu Agus Narestha Adi Pratama</b></h2>
                  <p class="text-muted text-sm"><b>About: </b> Full Stack Developer </p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Indonesia</li>
                    <li class="small mt-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : + 62</li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="{{asset('img/3.png')}}" alt="user-avatar" class="img-circle img-fluid" style="width:60%">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="#" class="btn btn-sm bg-teal">
                  <i class="fas fa-comments"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> View Profile
                </a>
              </div>
            </div>
          </div>
        </div>
@endsection
