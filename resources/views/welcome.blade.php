@extends('layouts.main')
@section('container')
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{ $title }}</title>
        
</head>


<br><br>
<div class="mt-3 mx-auto text-center">
    <h1>Lapor PakCamat</h1>
    <p>Form Pengaduan pelayanan Kecamatan Tawaeli,Kota Palu.</p>
</div>
    
<div class="container d-flex justify-content-center">
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
    <form action="/" method="post" id="post">
        @csrf
        <div class="col-lg-14">
            <div class="mb-1 ">
                <label for="exampleFormControlInput1" class="form-label">Email </label>
                <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="email@example.com">
                @error('email')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
            </div>
            <div class="mb-1 ">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Nama Saya..">
                @error('name')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
            </div>
            <div class="mb-1 ">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" value="{{ old('alamat') }}" name="alamat" placeholder="Alamat..">
                @error('alamat')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
            </div>
            <div class="mb-1 ">
                <label class="form-label">Gambar/Foto</label>
                <input type="file" class="form-control" name="gambar" id="gambar">
                @error('pesan')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
            <div class="mb-1 ">
                <label for="exampleFormControlTextarea1" class="form-label">Aduan</label>
                <textarea class="form-control"  name="pesan" rows="3">{{ old('pesan') }}</textarea>
                @error('pesan')
                <span class="text-danger"> {{ $message }} </span>
            @enderror
            </div>
        </div>
        
        <div class="text-center" id="pleaseWait">
            
            <button type="submit" class="btn btn-dark">Kirim</button>
        </div>
        

        <div id="PleaseWait" style="display: none;"><div class="preloader"><div class="loading"><div class="spinner-border text-primary" role="status"></div><span class=" text-dark">Mengirim..</span> </div></div></div>

    </form>
</div>



{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" crossorigin="anonymous"></script>

{{-- loading before submit --}}
<script>
    $('#post').submit(function() {
        var pass = true;
       
        if(pass == false){
            return false;
        }
        $("#PleaseWait").show();
    
        return true;
    });
    </script>
@endsection

