@extends('layout.master')
@section('title')
Ceritaku
@endsection

@section('content')
<div class="row">
@foreach ($cerita as $value)
<div class="col-1">
</div>
    <div class="col-11">
        <div class="card mb-3 mt-3" style="max-width: 70rem;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('img/'.$value->gambar)}}" alt="..." style="display: block; margin-left: auto; margin-right: auto; width: 50%; ">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{$value->judul}}</h5>
                <p class="card-text">{{$value->sipnosis}}</p>
                <strong><p class="card-text mb-3">Genre : <span class="badge badge-secondary">{{$value->genre}}</span></small></p></strong>
                <form action="/cerita/{{$value->id}}" method="POST">
                    <a href="/cerita/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/cerita/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endforeach

</div>
@endsection
