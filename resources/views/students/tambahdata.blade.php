@extends('layout.main')

@section('title', ' Form Tambah Data Mahasiswa')

@section('container')
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        {{-- ini sbuah contoh menggunakan variable dengan nama yang ada di route sebagai tampilan di view --}}
                        {{-- atau pun bisa menggunakan tag <php echo $variable karna ini menggunakan templeting engine makan menggunakan {}seperti ini juga bisa --}}
                        <h1 class="mt-3"> Form Tambah Data Mahasiswa</h1> 
                        <form method="POST" action="/students">
                            @csrf 
                            {{-- @csrf digunakan mengamankan data yang masuk resource, 
                                laravel akan mengirimkan token untuk memastikan bahwa website ini benar data akan masuk --}}
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                        <label for="nrp">NRP</label>
                                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="NRP" value="{{ old('nrp') }}">
                                        @error('nrp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ old('jurusan') }}">
                                        @error('jurusan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
       
@endsection
      