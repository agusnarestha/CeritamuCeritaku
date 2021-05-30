@extends('layout.master')

@section('content')
@php
    $id_user = Auth::user()->id;
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="/profile/{{$id_user}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea type="text" class="form-control" name="bio" id="bio">{{ $profile->bio }}</textarea>
                    @error('bio')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" name="instagram"  value="{{ $profile->instagram }}"  id="instagram">
                    @error('instagram')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" name="twitter"  value="{{ $profile->twitter }}"  id="twitter">
                    @error('twitter')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="example-date-input" class="col-2 col-form-label">Date</label>
                    <input class="form-control" type="date" value="{{ $profile->tgl_lahir }}" id="tgl_lahir" name="tgl_lahir">
                    @error('tgl_lahir')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan perubahan</button>
                <a href="/profile/{{$id_user}}" class="btn btn-warning btn-block mt-3">Kembali</a>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
    </div>
            
</div>
@endsection
