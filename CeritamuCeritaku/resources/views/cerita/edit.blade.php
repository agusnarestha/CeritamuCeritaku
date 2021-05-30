@extends('layout.master')

@section('content')
@php
    $user_id = Auth::user()->id;
@endphp
<div class="container">
            <form action="/cerita/{{$cerita->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="{{$cerita->judul}}">
                    @error('judul')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sipnosis">Sinopsis</label>
                    <input type="text" class="form-control" name="sipnosis" id="sipnosis" placeholder="Masukkan Sinopsis" value="{{$cerita->sipnosis}}">
                    @error('sipnosis')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi_cerita">Isi Cerita</label>
                    <textarea type="text" class="form-control" name="isi_cerita" id="isi_cerita">{{$cerita->isi_cerita}}</textarea>
                    @error('isi_cerita')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" name="genre" id="genre" placeholder="Masukkan genre" value="{{$cerita->genre}}">
                    @error('genre')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" name="gambar" id="gambar">
                    @error('gambar')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
</div>
@endsection
