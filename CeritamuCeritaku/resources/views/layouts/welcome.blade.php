@extends('layout.master')

@section('content')
<h1>Selamat Datang {{ Auth::user()->name }} !</h1>
    <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copy"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Postingan Cerita</span>
              <span class="info-box-number">
                {{$countcerita}}
                <small></small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
          <!-- /.info-box -->
    </div>
        <!-- /.col -->
@endsection
