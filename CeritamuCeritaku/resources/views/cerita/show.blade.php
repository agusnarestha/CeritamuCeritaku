@extends('layout.master')

@section('title')
Show Cerita
@endsection

@section('content')
@php
    $user_id = Auth::user()->id;
    $name = Auth::user()->name;
@endphp
<div class="container">
    <div class="row">
                    <div class="card mb-3 mt-3" style="max-width: 70rem;">
                    <div class="row g-0">
                    <div class="col-md-3 ml-3 mt-3">
                        <img src="{{asset('img/'.$cerita->gambar)}}" alt="..." style="display: block; width:250px; heigth:250px;">
                        <h5 class="mt-3"><i class="fab fa-instagram"></i>
                            <a href="https://www.instagram.com/{{ $profile->instagram }}/" class="ml-2">{{ $profile->instagram }}</a></h5>
                        <h5><i class="fab fa-twitter"></i>
                            <a href="https://twitter.com/{{ $profile->twitter }}/" class="ml-2">{{ $profile->twitter }}</a></h5>


                            <form action="/berilike" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="user_idl" id="user_idl" value="{{$user_id}}">
                                    <input type="hidden" class="form-control" name="cerita_idl" id="cerita_idl" value="{{$cerita->id}}">
                                    <button type="submit" class="btn btn-outline-dark mt-3"><i class="far fa-thumbs-up"></i> Like<span class="badge badge-light ml-3"> {{$countlike}}</span></button>
                                </div>

                            </form>

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                        <h3 style="font-weight:500;">{{$cerita->judul}}</h3>
                        <p class="card-text" style="text-align: justify">{{$cerita->sipnosis}}</p>
                        <strong><p class="card-text">Genre : <span class="badge badge-secondary">{{$cerita->genre}}</span></small></p></strong>
                        <p class="card-text mt-3" style="text-align: justify">{{$cerita->isi_cerita}}</p>
                        <p class="card-text mt-3" style="text-align: justify">Published : {{$cerita->created_at->isoFormat('dddd, D MMMM Y')}}</p>
                        </div>
                    </div>
                    </div>
                </div>
    </div>
    <div class="row">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Komentar
            </button>
                <div class="container mt-3">
                    @foreach ($komentar as $value)
                        <div class="card">
                            <div class="body ml-3 mt-2">
                                <h5>{{$value->nama}}</h5>
                                <p>{{$value->isi_komentar}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Isi Komentar </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/berikomentar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="komentar">Komentar : </label>
                        <input type="text" class="form-control" name="komentar" id="komentar" placeholder="Masukkan Komentar" >
                        <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{$user_id}}">
                        <input type="hidden" class="form-control" name="cerita_id" id="cerita_id" value="{{$cerita->id}}">
                        <input type="hidden" class="form-control" name="name" id="name" value="{{$name}}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
