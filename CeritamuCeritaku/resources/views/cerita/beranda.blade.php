@extends('layout.master')
@section('title')
Beranda Cerita
@endsection

@section('content')
<div class="row">
@foreach ($cerita as $value)
<div class="col-2">
</div>
    <div class="col-10">
        <div class="card mb-3 mt-3" style="max-width: 70rem;">
            <div class="container">
            <div class="row g-0">
            <div class="col-md-3 mt-3 mb-3 ml-3">
                <img src="{{asset('img/'.$value->gambar)}}" alt="..." style="display: block; width:250px; heigth:250px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h3 style="font-weight:500;">{{$value->judul}}</h3>
                <p class="card-text" style="text-align: justify">{{$value->sipnosis}}</p>
                <strong><p class="card-text">genre : <span class="badge badge-secondary">{{$value->genre}}</span></small></p></strong>
                <a href="/cerita/{{$value->id}}" class="btn btn-info mt-3">Show</a>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
@endforeach

</div>
@endsection
