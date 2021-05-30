@extends('layout.master')

@section('content')
@php
    $user_id = Auth::user()->id;
@endphp
<div class="container">
            <form action="/cerita" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul">
                    @error('judul')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sipnosis">Sinopsis</label>
                    <input type="text" class="form-control" name="sipnosis" id="sipnosis" placeholder="Masukkan Sinopsis">
                    @error('sipnosis')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi_cerita">Isi Cerita</label>
                    <textarea type="text" class="form-control" name="isi_cerita" id="isi_cerita"></textarea>
                    @error('isi_cerita')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" name="genre" id="genre" placeholder="Masukkan genre">
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
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
</div>
@endsection