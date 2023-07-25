@extends('master')
 
@section('halaman', 'login')
@section('judul_halaman', 'Halaman Login User')
 
@section('konten')
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<div class="row justify-content-center">
    <div class="card" style="width: 155rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <h6 class="card-subtitle mb-2 text-center text-muted">Isi dengan lengkap</h6>
            <form action="/authenticate" method="post" class="user">
                @csrf
                <div class="form-group mt-3 text-center">
                   <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan email anda" value="{{ old('email') }}">
                </div>
                <div class="form-group mt-3 text-center">
             	 <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ old('password') }}">
                </div>
                        

                <div class="form-group mt-3 text-center">
     			  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

                @if (count($errors) > 0)
                <div class="alert alert-danger mt-3">
                @foreach ($errors->all() as $error)
                - {{ $error }} <br>
                @endforeach
                </div>
                @endif


                @if(session('error'))
                <div class="alert alert-danger mt-3">
                {{session('error')}}!
                </div>
                @endif

@endsection
